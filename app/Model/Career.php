<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table = 'career';

    protected $fillable=['name','introduction','description','learning_nums','imgpath','status','created_user'];

    public function belongsToManyCourse()
    {
    	return $this->belongsToMany('App\Model\Course','career_course','career_id','course_id');
    }
}
