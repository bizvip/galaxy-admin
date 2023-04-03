<?php

declare(strict_types=1);

namespace App\Admin\Controllers;

use Illuminate\Http\Request;
use Slowlyo\OwlAdmin\Controllers\AdminController;
use Slowlyo\OwlAdmin\Renderers\Alert;
use Slowlyo\OwlAdmin\Renderers\InputKV;
use Slowlyo\OwlAdmin\Renderers\Tab;
use Slowlyo\OwlAdmin\Renderers\Tabs;
use Slowlyo\OwlAdmin\Renderers\TextControl;

final class SettingController extends AdminController
{
    protected string $queryPath = 'system/settings';

    protected string $pageTitle = '系统设置';

    public function index(): \Illuminate\Http\JsonResponse|\Illuminate\Http\Resources\Json\JsonResource
    {
        $page = $this->basePage()->body([
            Alert::make()->showIcon(true)->body("useless"),
            $this->form(),
        ]);

        return $this->response()->success($page);
    }

    public function form(): \Slowlyo\OwlAdmin\Renderers\Form
    {
        return $this->baseForm()
            ->redirect('')
            ->api($this->getStorePath())
            ->data(settings()->all())
            ->body(
                Tabs::make()->tabs([
                    Tab::make()->title('基本设置')->body([
                        TextControl::make()->label('网站名称')->name('site_name'),
                        InputKV::make()->label('附加配置')->name('addition_config'),
                    ]),
                    Tab::make()->title('上传设置')->body([
                        TextControl::make()->label('上传域名')->name('upload_domain'),
                        TextControl::make()->label('上传路径')->name('upload_path'),
                    ]),
                ]),
            );
    }

    public function store(Request $request): \Illuminate\Http\JsonResponse|\Illuminate\Http\Resources\Json\JsonResource
    {
        $data = $request->only([
            'site_name',
            'addition_config',
            'upload_domain',
            'upload_path',
        ]);

        return settings()->adminSetMany($data);
    }
}
