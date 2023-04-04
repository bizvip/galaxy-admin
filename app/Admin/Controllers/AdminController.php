<?php

declare(strict_types=1);

namespace App\Admin\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

abstract class AdminController extends \Slowlyo\OwlAdmin\Controllers\AdminController
{
    protected array $transformData = [];

    // 新增保存
    public function store(Request $request): JsonResponse|JsonResource
    {
        return $this->autoResponse($this->service->store($this->businessDataFilter($request->all())), __('admin.save'));
    }

    // 编辑保存
    public function update(Request $request): JsonResponse|JsonResource
    {
        $item = $this->businessDataFilter($request->all());

        $result = $this->service->update($this->getPrimaryValue($request), $item);

        return $this->autoResponse($result, __('admin.save'));
    }

    protected function businessDataFilter(array $item): array
    {
        if (array_key_exists('head_img', $item)) {
            if (empty($item['head_img'])) {
                $item['head_img'] = '';
            } elseif (stripos($item['head_img'], config('app.url')) !== 0) {
                $item['head_img'] = \config('filesystems.disks.public.url').$item['head_img'];
            }
        }

        return $this->transform($item);
    }

    protected function transform(array $item): array
    {
        if (empty($this->transformData)) {
            return $item;
        }

        foreach ($this->transformData as $k => $v) {
            if (array_key_exists($k, $item) && empty($item[$k])) {
                if (is_null($v)) {
                    unset($item[$k]);
                    continue;
                }
                if ('' === $v) {
                    $item[$k] = '';
                    continue;
                }
                $item[$k] = $v.$item[$k];
            }
        }

        return $item;
    }

    public function quickEdit(): JsonResponse|JsonResource
    {
        $data = request()->rows;

        foreach ($data as $item) {
            unset($item['created_at'], $item['updated_at']);
            $this->service->update($item['id'], $this->businessDataFilter($item));
        }

        return $this->autoResponse(true);
    }
}
