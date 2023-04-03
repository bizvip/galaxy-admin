<?php

declare(strict_types=1);

namespace App\Admin\Controllers;

use Slowlyo\OwlAdmin\Renderers\Page;
use Slowlyo\OwlAdmin\Renderers\Form;
use Slowlyo\OwlAdmin\Renderers\TableColumn;
use Slowlyo\OwlAdmin\Renderers\TextControl;
use Slowlyo\OwlAdmin\Controllers\AdminController;
use App\Services\LongVideoUploadLogService;

/**
 * @property LongVideoUploadLogService $service
 */
final class LongVideoUploadLogController extends AdminController
{
    protected string $serviceName = LongVideoUploadLogService::class;

    protected string $pageTitle = '长视频上传日志';

    public function list(): Page
    {
        $crud = $this->baseCRUD()
            ->filterTogglable(false)
            ->headerToolbar([$this->createButton(true), ...$this->baseHeaderToolBar(),])
            ->columns([
                TableColumn::make()->name('id')->label('ID')->sortable(true),
                TableColumn::make()->name('file_name')->label('原文件名'),
                TableColumn::make()->name('file_ext')->label('文件扩展名'),
                TableColumn::make()->name('file_path')->label('源文件存储路径'),
                TableColumn::make()->name('stored_name')->label('存储名'),
                TableColumn::make()->name('file_size')->label('文件大小'),
                TableColumn::make()->name('from_ua')->label('来源客户端(如果有)'),
                TableColumn::make()->name('from_usr')->label('来源用户名(如果有)'),
                TableColumn::make()->name('start_time')->label('上传时间'),
                TableColumn::make()->name('state')->label('状态'),
                TableColumn::make()->name('created_at')->label('创建时间')->type('datetime')->sortable(true),
                TableColumn::make()->name('updated_at')->label('更新时间')->type('datetime')->sortable(true),
                $this->rowActions(true),
            ]);

        return $this->baseList($crud);
    }

    public function form(): Form
    {
        return $this->baseForm()->body([
            TextControl::make()->name('file_name')->label('原文件名'),
            TextControl::make()->name('file_ext')->label('文件扩展名'),
            TextControl::make()->name('file_path')->label('源文件存储路径'),
            TextControl::make()->name('stored_name')->label('存储名'),
            TextControl::make()->name('file_size')->label('文件大小'),
            TextControl::make()->name('state')->label('状态'),
            TextControl::make()->name('from_ua')->label('来源客户端(如果有)'),
            TextControl::make()->name('from_usr')->label('来源用户名(如果有)'),
            TextControl::make()->name('start_time')->label('上传时间'),
        ]);
    }

    public function detail(): Form
    {
        return $this->baseDetail()->body([
            TextControl::make()->static(true)->name('id')->label('ID'),
            TextControl::make()->static(true)->name('file_name')->label('原文件名'),
            TextControl::make()->static(true)->name('file_ext')->label('文件扩展名'),
            TextControl::make()->static(true)->name('file_path')->label('源文件存储路径'),
            TextControl::make()->static(true)->name('stored_name')->label('存储名'),
            TextControl::make()->static(true)->name('file_size')->label('文件大小'),
            TextControl::make()->static(true)->name('from_ua')->label('来源客户端(如果有)'),
            TextControl::make()->static(true)->name('from_usr')->label('来源用户名(如果有)'),
            TextControl::make()->static(true)->name('state')->label('状态'),
            TextControl::make()->static(true)->name('start_time')->label('上传时间'),
            TextControl::make()->static(true)->name('created_at')->label('创建时间'),
            TextControl::make()->static(true)->name('updated_at')->label('更新时间'),
        ]);
    }
}
