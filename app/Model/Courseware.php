<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Courseware extends Model
{
    protected $table = 'course_ware';

    protected $fillable=['course_id','title','filesize','minutes','display_order','video_path','attribute','description','created_user'];
}
