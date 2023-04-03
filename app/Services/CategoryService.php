<?php

namespace App\Services;

use App\Models\Category;
use Slowlyo\OwlAdmin\Services\AdminService;

/**
 * @method Category getModel()
 * @method Category|\Illuminate\Database\Query\Builder query()
 */
class CategoryService extends AdminService
{
    protected string $modelName = Category::class;
}
