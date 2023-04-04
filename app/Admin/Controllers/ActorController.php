<?php

declare(strict_types=1);

namespace App\Admin\Controllers;

use App\Constants\BizConst;
use App\Services\ActorService;
use Slowlyo\OwlAdmin\Renderers\DateControl;
use Slowlyo\OwlAdmin\Renderers\Form;
use Slowlyo\OwlAdmin\Renderers\ImageControl;
use Slowlyo\OwlAdmin\Renderers\NumberControl;
use Slowlyo\OwlAdmin\Renderers\Page;
use Slowlyo\OwlAdmin\Renderers\RadiosControl;
use Slowlyo\OwlAdmin\Renderers\SelectControl;
use Slowlyo\OwlAdmin\Renderers\TableColumn;
use Slowlyo\OwlAdmin\Renderers\TextControl;

/**
 * @property ActorService $service
 */
final class ActorController extends AdminController
{
    protected string $serviceName = ActorService::class;

    protected string $pageTitle = '演员列表';

    protected array $transformData = ['remark' => '', 'en_name' => ''];

    public function list(): Page
    {
        $crud = $this->baseCRUD()->filterTogglable(false)->headerToolbar([$this->createButton(true), ...$this->baseHeaderToolBar(),])->columns([
            TableColumn::make()->name('id')->label('ID')->sortable(true),
            TableColumn::make()->name('sort')->label('排序(升序)')->quickEdit(NumberControl::make()->min(0))->sortable(true),
            TableColumn::make()->name('name')->label('演员中文名'),
            SelectControl::make()->static(true)->name('sex')->label('性别')->options(BizConst::HUMAN_SEX_OPTIONS),
            TableColumn::make()->name('en_name')->label('演员外文名'),
            TableColumn::make()->name('birthday')->label('出生日期'),
            TableColumn::make()->name('nationality')->label('国籍')->type('select')->options(BizConst::HUMAN_NATIONALITY_OPTIONS)->static(true),
            TableColumn::make()->name('head_img')->label('头像')->type('image')->enlargeAble(true)->thumbRatio('1:1')->thumbMode('cover')->showToolbar(true),
            TableColumn::make()->name('items_total')->label('站内视频数量'),
            TableColumn::make()->name('remark')->label('备注'),
            TableColumn::make()->name('created_at')->label('创建时间')->type('datetime')->sortable(true),
            TableColumn::make()->name('updated_at')->label('更新时间')->type('datetime')->sortable(true),
            $this->rowActions(true),
        ])->loadDataOnce(true)->quickSaveApi(admin_url('film/actors/quick'))->orderBy('sort')->orderDir('asc');

        return $this->baseList($crud);
    }

    public function form(): Form
    {
        return $this->baseForm()->body([
            TextControl::make()->name('name')->label('演员中文名')->trimContents(true)->required(true),
            TextControl::make()->name('en_name')->label('演员外文名')->value('')->placeholder('如果未知可以不填写')->trimContents(true)->clearValueOnEmpty(true),
            RadiosControl::make()->name('sex')->label('性别')->required(true)->options(BizConst::HUMAN_SEX_OPTIONS)->value(0),
            DateControl::make()->name('birthday')->label('出生日期')->format(BizConst::JS_DATE_FORMAT)->value('2023-01-01'),
            SelectControl::make()->name('nationality')->label('国籍')->options(BizConst::HUMAN_NATIONALITY_OPTIONS)->value('jp'),
            ImageControl::make()->name('head_img')->label('头像')->receiver($this->uploadImagePath())->value(''),
            TextControl::make()->name('items_total')->label('站内视频数量'),
            TextControl::make()->name('remark')->label('备注')->placeholder('默认空'),
            TextControl::make()->name('sort')->label('排序(升序)'),
        ]);
    }

    public function detail(): Form
    {
        return $this->baseDetail()->body([
            TextControl::make()->static(true)->name('id')->label('ID'),
            TextControl::make()->static(true)->name('name')->label('演员中文名'),
            TextControl::make()->static(true)->name('sex')->label('性别'),
            TextControl::make()->static(true)->name('en_name')->label('演员外文名'),
            TextControl::make()->static(true)->name('birthday')->label('出生日期'),
            TextControl::make()->static(true)->name('nationality')->label('国籍'),
            TextControl::make()->name('head_img')->label('头像')->type('static-image')->static(true)->enlargeAble(true)->thumbRatio('1:1')->thumbMode('cover')->showToolbar(false),
            TextControl::make()->static(true)->name('items_total')->label('站内视频数量'),
            TextControl::make()->static(true)->name('remark')->label('备注'),
            TextControl::make()->static(true)->name('sort')->label('排序(升序)'),
            TextControl::make()->static(true)->name('created_at')->label('创建时间'),
            TextControl::make()->static(true)->name('updated_at')->label('更新时间'),
        ]);
    }
}
