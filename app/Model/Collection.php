<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $table = 'collection';

    protected $fillable = ['user_id','course_id'];
}
