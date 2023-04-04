<?php

declare(strict_types=1);

namespace App\Admin\Controllers;

use App\Services\PlotService;
use Slowlyo\OwlAdmin\Renderers\Form;
use Slowlyo\OwlAdmin\Renderers\Page;
use Slowlyo\OwlAdmin\Renderers\TableColumn;
use Slowlyo\OwlAdmin\Renderers\TextareaControl;
use Slowlyo\OwlAdmin\Renderers\TextControl;
use Slowlyo\OwlAdmin\Renderers\UUIDControl;

/**
 * @property PlotService $service
 */
final class PlotController extends AdminController
{
    protected string $serviceName = PlotService::class;

    protected string $pageTitle = '影片剧情管理';

    protected array $transformData = ['desc' => ''];

    public function list(): Page
    {
        $crud = $this->baseCRUD()->filterTogglable(false)->headerToolbar([$this->createButton(true), ...$this->baseHeaderToolBar(),])->columns([
            TableColumn::make()->name('id')->label('ID')->sortable(true),
            TableColumn::make()->name('name')->label('剧情名字'),
            TableColumn::make()->name('desc')->label('剧情说明'),
            TableColumn::make()->name('slug')->label('标识'),
            TableColumn::make()->name('created_at')->label('创建时间')->type('datetime')->sortable(true),
            TableColumn::make()->name('updated_at')->label('更新时间')->type('datetime')->sortable(true),
            $this->rowActions(true),
        ])->loadDataOnce(true)
            // ->quickSaveApi(admin_url('film/actors/quick'))
            ->orderBy('id');

        return $this->baseList($crud);
    }

    public function form(): Form
    {
        return $this->baseForm()->body([
            TextControl::make()->name('name')->label('剧情名字')->minLength(2)->maxLength(32)->trimContents(true)->required(true),
            TextareaControl::make()->name('desc')->label('剧情说明')->required(false)->clearable(true)->showCounter(true)->placeholder('可空')->maxLength(200),
            UUIDControl::make()->name('slug')->label('标识'),
        ]);
    }

    public function detail(): Form
    {
        return $this->baseDetail()->body([
            TextControl::make()->static(true)->name('id')->label('ID'),
            TextControl::make()->static(true)->name('name')->label('剧情名字'),
            TextControl::make()->static(true)->name('desc')->label('剧情说明'),
            TextControl::make()->static(true)->name('slug')->label('标识'),
            TextControl::make()->static(true)->name('created_at')->label('创建时间'),
            TextControl::make()->static(true)->name('updated_at')->label('更新时间'),
        ]);
    }
}
