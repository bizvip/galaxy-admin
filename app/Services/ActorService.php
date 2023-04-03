<?php

namespace App\Services;

use App\Models\Actor;
use Slowlyo\OwlAdmin\Services\AdminService;

/**
 * @method Actor getModel()
 * @method Actor|\Illuminate\Database\Query\Builder query()
 */
class ActorService extends AdminService
{
    protected string $modelName = Actor::class;
}
