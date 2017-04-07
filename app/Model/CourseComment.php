<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CourseComment extends Model
{
    protected $table = 'course_comment';

    protected $fillable = ['user_id','course_id','comment'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
