<?php

declare(strict_types=1);

namespace App\Constants;

// use Hyperf\Constants\Annotation\Constants;

// #[Constants]
final class BizConst
{
    public final const UPLOAD_STATES = [
        self::UPLOAD_SUCCESS => '上传成功',
        self::UPLOAD_FAILED  => '上传失败',
    ];
    public final const UPLOAD_SUCCESS = 1;
    public final const UPLOAD_FAILED = 2;
}
