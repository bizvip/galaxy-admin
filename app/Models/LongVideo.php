<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Slowlyo\OwlAdmin\Models\BaseModel as Model;

final class LongVideo extends Model
{
    use SoftDeletes;

    protected $table = 'long_video';

}
