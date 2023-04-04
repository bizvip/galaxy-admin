<?php

declare(strict_types=1);

namespace App\Admin\Controllers;

use App\Services\CategoryService;
use Slowlyo\OwlAdmin\Renderers\Form;
use Slowlyo\OwlAdmin\Renderers\ImageControl;
use Slowlyo\OwlAdmin\Renderers\NumberControl;
use Slowlyo\OwlAdmin\Renderers\Page;
use Slowlyo\OwlAdmin\Renderers\TableColumn;
use Slowlyo\OwlAdmin\Renderers\TextControl;

/**
 * @property CategoryService $service
 */
final class CategoryController extends AdminController
{
    protected string $serviceName = CategoryService::class;

    protected string $pageTitle = '影片类别';

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
                TableColumn::make()->name('name')->label('分类名字'),
                TableColumn::make()
                    ->name('head_img')
                    ->label('分类图')
                    ->type('image')
                    ->enlargeAble(true)
                    ->thumbRatio('16:9')
                    ->thumbMode('cover')
                    ->showToolbar(true),
                TableColumn::make()->name('sort')->label('排序(升序)')->sortable(true)->quickEdit(
                    NumberControl::make()->min(0),
                ),
                TableColumn::make()->name('slug')->label('英文名'),
                TableColumn::make()->name('items_total')->label('库内该分类影片总数'),
                TableColumn::make()->name('created_at')->label('创建时间')->type('datetime')->sortable(true),
                TableColumn::make()->name('updated_at')->label('更新时间')->type('datetime')->sortable(true),
                $this->rowActions(true),
            ])
            ->loadDataOnce(true)
            ->quickSaveApi(admin_url('film/categories/quick'))
            ->orderBy('id')
            ->orderDir('desc')
            ->headerToolbar([
                $this->createButton(true),
                'bulkActions',
                amis('reload'),
                amis('filter-toggler')->align('right'),
            ]);

        return $this->baseList($crud);
    }

    public function form(): Form
    {
        return $this->baseForm()->body([
            TextControl::make()->name('name')->label('分类名字')->required(true),
            TextControl::make()->name('slug')->label('分类英文名字(全小写)')->required(true),
            ImageControl::make()
                ->name('head_img')
                ->label('分类封面')
                ->limit(1024 * 1024 * 1024)
                ->accept('.jpg,.jpeg,.gif,.png,.bmp')
                ->value('')
                ->receiver($this->uploadImagePath()),
            NumberControl::make()->name('sort')->label('排序')->min(0)->value(0),
            NumberControl::make()->name('items_total')->label('库内该分类影片总数')->min(0)->value(0),
        ]);
    }

    public function detail(): Form
    {
        return $this->baseDetail()->body([
            TextControl::make()->static(true)->name('id')->label('ID'),
            TextControl::make()->static(true)->name('name')->label('分类名字'),
            TextControl::make()
                ->name('head_img')
                ->label('分类图')
                ->type('static-image')
                ->static(true)
                ->enlargeAble(true)
                ->thumbRatio('16:9')
                ->thumbMode('cover')
                ->showToolbar(false),
            TextControl::make()->static(true)->name('sort')->label('排序'),
            TextControl::make()->static(value: true)->name(value: 'slug')->label(value: '分类英文名'),
            TextControl::make()->static(true)->name('items_total')->label('库内该分类影片总数'),
            TextControl::make()->static(true)->name('created_at')->label('创建时间'),
            TextControl::make()->static(true)->name('updated_at')->label('更新时间'),
        ]);
    }
}
