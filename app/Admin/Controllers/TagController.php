<?php

declare(strict_types=1);

namespace App\Admin\Controllers;

use App\Services\TagService;
use Slowlyo\OwlAdmin\Renderers\Form;
use Slowlyo\OwlAdmin\Renderers\ImageControl;
use Slowlyo\OwlAdmin\Renderers\NumberControl;
use Slowlyo\OwlAdmin\Renderers\Page;
use Slowlyo\OwlAdmin\Renderers\TableColumn;
use Slowlyo\OwlAdmin\Renderers\TextControl;

/**
 * @property TagService $service
 */
final class TagController extends AdminController
{
    protected string $serviceName = TagService::class;

    protected string $pageTitle = '标签';

    public function list(): Page
    {
        $crud = $this->baseCRUD()->filterTogglable(false)->headerToolbar([
            $this->createButton(true),
            ...$this->baseHeaderToolBar(),
        ])->columns([
            TableColumn::make()->name('id')->label('ID')->sortable(true),
            TableColumn::make()->name('name')->label('标签名'),
            TableColumn::make()->name('slug')->label('标签标识'),
            TableColumn::make()->name('head_img')->label('标签图标')->type('image')->enlargeAble(true)->thumbRatio('1:1')->thumbMode('cover')->showToolbar(true),
            TableColumn::make()->name('items_total')->label('包含资源数量'),
            TableColumn::make()->name('created_at')->label('创建时间')->type('datetime')->sortable(true),
            TableColumn::make()->name('updated_at')->label('更新时间')->type('datetime')->sortable(true),
            $this->rowActions(true),
        ])->orderBy('id')->orderDir('desc');

        return $this->baseList($crud);
    }

    public function form(): Form
    {
        return $this->baseForm()->body([
            TextControl::make()->name('name')->label('标签名')->required(true)->minLength(2)->maxLength(32)->showCounter(true)->clearable(true)->placeholder('标签名'),
            TextControl::make()
                ->name('slug')
                ->label('标签标识')
                ->placeholder('全部小写字母')
                ->description('建议使用英文单词，多词使用连接符区隔（短中横线）')
                ->required(true)
                ->minLength(2)
                ->maxLength(30)
                ->clearable(true)
                ->showCounter(true),
            ImageControl::make()->name('head_img')->label('标签图标')->receiver($this->uploadImagePath())->value('')->showCompressOptions(true),
            NumberControl::make()->name('items_total')->label('包含资源数量')->value(0)->min(0)->max(4200000000)->readOnly(true)->disabled(true),
        ]);
    }

    public function detail(): Form
    {
        return $this->baseDetail()->body([
            TextControl::make()->static(true)->name('id')->label('ID'),
            TextControl::make()->static(true)->name('name')->label('标签名'),
            TextControl::make()->static(true)->name('slug')->label('标签标识'),
            TextControl::make()->name('head_img')->label('标签图标')->type('static-image')->static(true)->enlargeAble(true)->thumbRatio('1:1')->thumbMode('cover')->showToolbar(false),
            TextControl::make()->static(true)->name('items_total')->label('包含资源数量'),
            TextControl::make()->static(true)->name('created_at')->label('创建时间'),
            TextControl::make()->static(true)->name('updated_at')->label('更新时间'),
        ]);
    }
}
