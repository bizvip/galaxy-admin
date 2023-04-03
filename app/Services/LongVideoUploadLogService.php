<?php

namespace App\Services;

use App\Models\LongVideoUploadLog;
use Slowlyo\OwlAdmin\Services\AdminService;

/**
 * @method LongVideoUploadLog getModel()
 * @method LongVideoUploadLog|\Illuminate\Database\Query\Builder query()
 */
final class LongVideoUploadLogService extends AdminService
{
    protected string $modelName = LongVideoUploadLog::class;
}
