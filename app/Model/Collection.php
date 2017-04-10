<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    /**
     * 收藏表
     * @var string
     */
    protected $table = 'collection';

    /**
     * @var array
     */
    protected $fillable = ['user_id','course_id'];
}
