<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
class Course extends Model
{
    const DIFFICULTY_PRIMARY = '初级';
    const DIFFICULTY_MIDDLE = '中级';
    const DIFFICULTY_ADVANCED = '高级';

    const STATUS_OPEN = '开启';
    const STATUS_CLOSE = '关闭';

    const RECOMMEND_YES = '是';
    const RECOMMEND_NO = '否';

    protected $table = 'course';

    protected $fillable=['code','title','imgpath','imgpath2','introduction','description','teacher_id','category_id','courseware_nums','learning_nums','minutes','difficulty','is_recommend','is_latest','display_order','fee','status','published_time','created_user'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users()
    {
    	return $this->belongsTo('App\Model\User','teacher_id','id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function careers()
    {
    	return $this->belongsToMany(Career::class, 'career_course', 'course_id', 'career_id');
    }

    /**
     * 将难易程度转换
     * @param $value
     * @return string
     */
    public function getDifficultyAttribute($value)
    {
    	switch ($value) {
    		case '1':
    			$attr = self::DIFFICULTY_PRIMARY;
    			break;
    		case '2':
    			$attr = self::DIFFICULTY_MIDDLE;
    			break;
    		case '3':
    			$attr = self::DIFFICULTY_ADVANCED;
    			break;
    	}
    	return $attr;
    }

    public function getStatusAttribute($value)
    {
        switch ($value) {
            case '1':
                $attr = self::STATUS_OPEN;
                break;
            case '2':
                $attr = self::STATUS_CLOSE;
                break;
        }
        return $attr;
    }

    public function getIsRecommendAttribute($value)
    {
        switch ($value) {
            case '1':
                $attr = self::RECOMMEND_YES;
                break;
            case '2':
                $attr = self::RECOMMEND_NO;
                break;
        }
        return $attr;
    }
}
