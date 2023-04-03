<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Slowlyo\OwlAdmin\Models\BaseModel as Model;

final class LongVideoUploadLog extends Model
{
    use SoftDeletes;

    protected $table = 'long_video_upload_log';
    
}
