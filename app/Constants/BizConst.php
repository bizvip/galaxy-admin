<?php

declare(strict_types=1);

namespace App\Constants;

// use Hyperf\Constants\Annotation\Constants;

// #[Constants]
final class BizConst
{
    public final const JS_DATE_FORMAT = 'YYYY-MM-DD';
    public final const DATE_FORMAT = 'Y-m-d';
    public final const DATETIME_FORMAT = 'Y-m-d H:i:s';

    public final const UPLOAD_STATES = [
        self::UPLOAD_SUCCESS => '上传成功',
        self::UPLOAD_FAILED  => '上传失败',
    ];
    public final const UPLOAD_SUCCESS = 1;
    public final const UPLOAD_FAILED = 2;

    public final const HUMAN_SEX_OPTIONS = [1 => '男', 0 => '女'];
    public final const HUMAN_NATIONALITY_OPTIONS = ['cn' => '中国', 'jp' => '日本'];
}
