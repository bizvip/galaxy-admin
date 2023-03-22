<?php

declare(strict_types=1);

namespace App\Admin\Controllers;

use App\Services\LongVideoService;
use Slowlyo\OwlAdmin\Controllers\AdminController;
use Slowlyo\OwlAdmin\Renderers\Form;
use Slowlyo\OwlAdmin\Renderers\Page;
use Slowlyo\OwlAdmin\Renderers\TableColumn;
use Slowlyo\OwlAdmin\Renderers\TextControl;

final class LongVideoController extends AdminController
{
    protected string $serviceName = LongVideoService::class;

    protected string $pageTitle = '长视频库';

    public function list(): Page
    {
        $crud = $this->baseCRUD()->filterTogglable(false)->headerToolbar([
            $this->createButton(true),
            ...$this->baseHeaderToolBar(),
        ])->loadDataOnce(true)->columns([
            TableColumn::make()->name('id')->label('ID')->sortable(true),
            TableColumn::make()->name('origin_name')->label('视频原名'),
            TableColumn::make()->name('stored_name')->label('存储名字'),
            TableColumn::make()->name('ext')->label('后缀名'),
            TableColumn::make()->name('size')->label('文件大小'),
            TableColumn::make()->name('type')->label('原编码类型'),
            TableColumn::make()->name('origin_url')->label('原文件链接'),
            TableColumn::make()->name('poster_url')->label('海报/封面链接'),
            TableColumn::make()->name('m3u8_url')->label('视频播放地址'),
            TableColumn::make()->name('av_code')->label('番号或视频标识'),
            TableColumn::make()->name('poster_thumb_url')->label('海报/封面缩略图地址'),
            TableColumn::make()->name('duration')->label('视频长度秒'),
            TableColumn::make()->name('status')->label('状态'),
            TableColumn::make()->name('upload_id')->label('上传日志ID'),
            TableColumn::make()->name('created_at')->label('创建时间')->type('datetime')->sortable(true),
            TableColumn::make()->name('updated_at')->label('更新时间')->type('datetime')->sortable(true),
            $this->rowActions(true),
        ]);

        return $this->baseList($crud);
    }

    public function form(): Form
    {
        return $this->baseForm()->body([
            TextControl::make()->name('origin_name')->label('视频原名'),
            TextControl::make()->name('stored_name')->label('存储名字'),
            TextControl::make()->name('ext')->label('后缀名'),
            TextControl::make()->name('size')->label('文件大小'),
            TextControl::make()->name('type')->label('原编码类型'),
            TextControl::make()->name('origin_url')->label('原文件链接'),
            TextControl::make()->name('poster_url')->label('海报/封面链接'),
            TextControl::make()->name('m3u8_url')->label('视频播放地址'),
            TextControl::make()->name('av_code')->label('番号或视频标识'),
            TextControl::make()->name('poster_thumb_url')->label('海报/封面缩略图地址'),
            TextControl::make()->name('duration')->label('视频长度秒'),
            TextControl::make()->name('status')->label('状态'),
            TextControl::make()->name('upload_id')->label('上传日志ID'),
        ]);
    }

    public function detail(): Form
    {
        return $this->baseDetail()->body([
            TextControl::make()->static(true)->name('id')->label('ID'),
            TextControl::make()->static(true)->name('origin_name')->label('视频原名'),
            TextControl::make()->static(true)->name('stored_name')->label('存储名字'),
            TextControl::make()->static(true)->name('ext')->label('后缀名'),
            TextControl::make()->static(true)->name('size')->label('文件大小'),
            TextControl::make()->static(true)->name('type')->label('原编码类型'),
            TextControl::make()->static(true)->name('origin_url')->label('原文件链接'),
            TextControl::make()->static(true)->name('poster_url')->label('海报/封面链接'),
            TextControl::make()->static(true)->name('m3u8_url')->label('视频播放地址'),
            TextControl::make()->static(true)->name('av_code')->label('番号或视频标识'),
            TextControl::make()->static(true)->name('poster_thumb_url')->label('海报/封面缩略图地址'),
            TextControl::make()->static(true)->name('duration')->label('视频长度秒'),
            TextControl::make()->static(true)->name('status')->label('状态'),
            TextControl::make()->static(true)->name('upload_id')->label('上传日志ID')->readOnly(true),
            TextControl::make()->static(true)->name('created_at')->label('创建时间'),
            TextControl::make()->static(true)->name('updated_at')->label('更新时间'),
        ]);
    }
}
