<?php

declare(strict_types=1);

namespace App\Admin\Controllers;

use App\Services\ActorService;
use Slowlyo\OwlAdmin\Controllers\AdminController;
use Slowlyo\OwlAdmin\Renderers\Form;
use Slowlyo\OwlAdmin\Renderers\NumberControl;
use Slowlyo\OwlAdmin\Renderers\Page;
use Slowlyo\OwlAdmin\Renderers\TableColumn;
use Slowlyo\OwlAdmin\Renderers\TextControl;

/**
 * @property ActorService $service
 */
final class ActorController extends AdminController
{
    protected string $serviceName = ActorService::class;

    protected string $pageTitle = '演员列表';

    public function list(): Page
    {
        $crud = $this->baseCRUD()
            ->filterTogglable(false)
            ->headerToolbar([
                $this->createButton(true),
                ...$this->baseHeaderToolBar(),
            ])
            ->columns([
                TableColumn::make()->name('id')->label('ID')->sortable(true),
                TableColumn::make()->name('weight')->label('排序(升序)(升序)')
                    ->quickEdit(NumberControl::make()->min(0))->sortable(true),
                TableColumn::make()->name('name')->label('演员原名'),
                TableColumn::make()->name('sex')->label('性别'),
                TableColumn::make()->name('en_name')->label('演员英文名'),
                TableColumn::make()->name('birthday')->label('出生日期'),
                TableColumn::make()->name('nationality')->label('国籍'),
                TableColumn::make()->name('head_pic')->label('头像'),
                TableColumn::make()->name('video_total')->label('站内视频数量'),
                TableColumn::make()->name('remark')->label('备注'),
                TableColumn::make()->name('created_at')->label('创建时间')->type('datetime')->sortable(true),
                TableColumn::make()->name('updated_at')->label('更新时间')->type('datetime')->sortable(true),
                $this->rowActions(true),
            ])
            ->loadDataOnce(true)
            // ->quickSaveApi(admin_url('categories/quick'))
            ->orderBy('weight')
            ->orderDir('asc');

        return $this->baseList($crud);
    }

    public function form(): Form
    {
        return $this->baseForm()->body([
            TextControl::make()->name('name')->label('演员原名'),
            TextControl::make()->name('sex')->label('性别'),
            TextControl::make()->name('en_name')->label('演员英文名'),
            TextControl::make()->name('birthday')->label('出生日期'),
            TextControl::make()->name('nationality')->label('国籍'),
            TextControl::make()->name('head_pic')->label('头像'),
            TextControl::make()->name('video_total')->label('站内视频数量'),
            TextControl::make()->name('remark')->label('备注'),
            TextControl::make()->name('sort')->label('排序(升序)'),
        ]);
    }

    public function detail(): Form
    {
        return $this->baseDetail()->body([
            TextControl::make()->static(true)->name('id')->label('ID'),
            TextControl::make()->static(true)->name('name')->label('演员原名'),
            TextControl::make()->static(true)->name('sex')->label('性别'),
            TextControl::make()->static(true)->name('en_name')->label('演员英文名'),
            TextControl::make()->static(true)->name('birthday')->label('出生日期'),
            TextControl::make()->static(true)->name('nationality')->label('国籍'),
            TextControl::make()->static(true)->name('head_pic')->label('头像'),
            TextControl::make()->static(true)->name('video_total')->label('站内视频数量'),
            TextControl::make()->static(true)->name('remark')->label('备注'),
            TextControl::make()->static(true)->name('sort')->label('排序(升序)'),
            TextControl::make()->static(true)->name('created_at')->label('创建时间'),
            TextControl::make()->static(true)->name('updated_at')->label('更新时间'),
        ]);
    }
}
