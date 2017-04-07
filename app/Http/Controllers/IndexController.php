<?php

namespace App\Http\Controllers;

use App\Model\CourseComment;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Career;
use App\Model\Course;
use App\Model\CareerCourse;
use App\Model\CourseUser;
use App\Model\Category;
use App\Model\Courseware;
use App\Model\User;
use Illuminate\Support\Facades\Storage;
class IndexController extends Controller
{

    /**
     * 线上课程列表
     * @param array ...$type
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(...$type)
    {
//        $user = \Auth::user();
//        dd($user);
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

    /**
     * 线上课程详情
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function course($id)
    {
        $data = Course::where('id',$id)->first();
        $count = CourseUser::where('course_id',$id)->count();
        $courseware = Courseware::where('course_id',$id)->select('title','minutes','id')->orderBy('display_order','asc')->get();
        $comments = CourseComment::where('course_id',$id)->orderBy('id','desc')->get()->map(function($comment){
            $comment->realname = $comment->user->username;
            return $comment;
        });
    	return view('home.course',['data'=>$data,'count'=>$count,'courseware'=>$courseware,'comments'=>$comments]);
    }

    /**
     * 线下课程列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function scene()
    {
    	return view('home.scene');
    }

    /**
     * 职业路径列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function career()
    {
        $datas = Career::where('status','1')->where('pid',0)->orderBy('id','desc')->get();
    	return view('home.career',['datas'=>$datas]);
    }

    /**
     * 职业路径详情
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function classs($id)
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

    /**
     * 视频播放
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function video($id)
    {
        $qiniu = new QiniuController;
        $url = $qiniu->getUrl();
//        dd($qiniu->getUrl());
//        $post = Post::findOrFail(2);
//        \Auth::loginUsingId(1);
//        $user = User::where('id',1)->first();
//        dd($user);
//        //过滤权限
////        $this->authorize('update',$post);
//        $this->authorize('seeVipVideo',$user);

        $data = Courseware::where('id',$id)->select('video_path')->first();
//        $file = Storage::disk('local')->get($data->video_path);
        return view('home.video',['data'=>$data,'url'=>$url]);
    }
}
