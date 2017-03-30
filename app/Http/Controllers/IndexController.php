<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Career;
use App\Model\Course;
use App\Model\CareerCourse;
use App\Model\CourseUser;
use App\Model\Category;
use App\Model\Courseware;
class IndexController extends Controller
{

    /*线上课程列表*/
    public function index(...$type)
    {
        // var_dump($type);exit;
        $type = empty($type)?'1':$type[0];
        switch ($type) {
            case '1':
                $order = 'display_order';//推荐
                break;
            case '2':
                $order = 'id';//最新
                break;
            case '3':
                $order = 'learning_nums';//最热
                break;
            default:
                $order = 'display_order';//默认以推荐排序
                break;
        }

        $datas = Course::leftjoin('users as u','u.id','=','course.teacher_id')
        ->leftjoin('category as c','c.id','=','course.category_id')
        ->select('u.realname','course.title','course.id','course.introduction','course.difficulty','course.learning_nums','c.name')
        ->orderBy($order,'desc')
        ->orderBy('id','desc')
        ->where('course.status',1)
        ->paginate(20);

    	return view('home.index',['datas'=>$datas]);
    }

    /*线上课程详情*/
    public function course($id)
    {
        $data = Course::where('id',$id)->first();
        $count = CourseUser::where('course_id',$id)->count();
        $courseware = Courseware::where('course_id',$id)->select('title','minutes','id')->orderBy('display_order','asc')->get();
    	return view('home.course',['data'=>$data,'count'=>$count,'courseware'=>$courseware]);
    }

    /*线下课程列表*/
    public function scene()
    {
    	return view('home.scene');
    }

    /*职业路径列表*/
    public function career()
    {
        $datas = Career::where('status','1')->get();
    	return view('home.career',['datas'=>$datas]);
    }

    /*职业路径详情*/
    public function class($id)
    {
        $datas = CareerCourse::leftjoin('course as c','c.id','=','career_course.course_id')
        ->where('career_id','=',$id)->get();
        $career_name = Career::where('id','=',$id)->value('name');
        // var_dump($datas);
        // $dd = Course::where('status',1)->get();
        // foreach ($dd as $key => $value) {
        //     $value['ddddddddddddd'] = $value->belongsToManyCareer()->get();
        // }
        // dd($dd);
        
        // var_dump($courseWithCareer);
    	return view('home.class',['datas'=>$datas,'career_name'=>$career_name]);
    }

    /*视频播放*/
    public function video($id)
    {
        $data = Courseware::where('id',$id)->select('video_path')->first();
        return view('home.video',['data'=>$data]);
    }
}
