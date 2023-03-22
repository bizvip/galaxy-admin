<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\LongVideo;
use Slowlyo\OwlAdmin\Services\AdminService;

/**
 * @method LongVideo getModel()
 * @method LongVideo|\Illuminate\Database\Query\Builder query()
 */
final class LongVideoService extends AdminService
{
    protected string $modelName = LongVideo::class;
}
