<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table = 'career';

    protected $fillable=['name','pid','introduction','description','learning_nums','imgpath','status','created_user'];

    public function courses()
    {
    	return $this->belongsToMany(Course::class,'career_course','career_id','course_id');
    }
}
