<?php

declare(strict_types=1);

namespace App\Admin\Controllers;

use App\Services\CategoryService;
use Slowlyo\OwlAdmin\Controllers\AdminController;
use Slowlyo\OwlAdmin\Renderers\Form;
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
                TableColumn::make()->name('sort')->label('排序'),
                TableColumn::make()->name('slug')->label('唯一标识'),
                TableColumn::make()->name('item_total')->label('库内该分类影片总数'),
                TableColumn::make()->name('created_at')->label('创建时间')->type('datetime')->sortable(true),
                TableColumn::make()->name('updated_at')->label('更新时间')->type('datetime')->sortable(true),
                $this->rowActions(true),
            ]);

        return $this->baseList($crud);
    }

    public function form(): Form
    {
        return $this->baseForm()->body([
            TextControl::make()->name('name')->label('分类名字'),
            TextControl::make()->name('sort')->label('排序'),
            TextControl::make()->name('slug')->label('唯一标识'),
            TextControl::make()->name('item_total')->label('库内该分类影片总数'),
        ]);
    }

    public function detail(): Form
    {
        return $this->baseDetail()->body([
            TextControl::make()->static(true)->name('id')->label('ID'),
            TextControl::make()->static(true)->name('name')->label('分类名字'),
            TextControl::make()->static(true)->name('sort')->label('排序'),
            TextControl::make()->static(true)->name('slug')->label('唯一标识'),
            TextControl::make()->static(true)->name('item_total')->label('库内该分类影片总数'),
            TextControl::make()->static(true)->name('created_at')->label('创建时间'),
            TextControl::make()->static(true)->name('updated_at')->label('更新时间'),
        ]);
    }
}
