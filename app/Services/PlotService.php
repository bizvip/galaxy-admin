<?php

namespace App\Services;

use App\Models\Plot;
use Slowlyo\OwlAdmin\Services\AdminService;

/**
 * @method Plot getModel()
 * @method Plot|\Illuminate\Database\Query\Builder query()
 */
class PlotService extends AdminService
{
    protected string $modelName = Plot::class;
}
