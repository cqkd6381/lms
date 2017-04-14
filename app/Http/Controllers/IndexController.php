<?php

namespace App\Http\Controllers;

use App\Model\CourseComment;
use App\Model\UserGoods;
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
use App\Model\Post;
use Illuminate\Support\Facades\Gate;
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
        ->select('u.realname','course.title','course.imgpath','course.id','course.introduction','course.difficulty','course.learning_nums','c.name')
        ->orderBy($order,'desc')
        ->orderBy('id','desc')
        ->where('course.status',1)
        ->paginate(20);
//        dd($datas);
    	return view('home.index',['datas'=>$datas]);
    }

    /**
     * 线上课程详情
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function course($id)
    {
        $data = Course::where('course.id',$id)->leftjoin('users as u','u.id','=','course.teacher_id')->select('course.*','u.realname')->first();
        $count = CourseUser::where('course_id',$id)->count();
        $courseware = Courseware::where('course_id',$id)->select('title','minutes','id','is_charge')->orderBy('display_order','asc')->get();
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
    	return view('home.career1',['datas'=>$datas]);
    }

    /**
     * 职业路径详情
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function classs($id)
    {
        $career = Career::where('status',1)->findOrfail($id);
        $nums = 0;
        $datas = Career::where('pid',$id)->orderBy('id','asc')->get()->toArray();
        foreach($datas as $key=>$value){
            $class = CareerCourse::leftjoin('course as c','c.id','=','career_course.course_id')
//                ->leftjoin('career as ca','ca.id','=','career_course.career_id')
                ->leftjoin('users as u','u.id','=','c.teacher_id')
                ->where('career_course.career_id','=',$value['id'])->select('u.realname','c.id','c.imgpath','c.learning_nums')
                ->orderBy('c.display_order','desc')
                ->get();
            $nums += count($class);
            $datas[$key]['classes'] = $class;
        }
    	return view('home.class1',['datas'=>$datas,'career'=>$career,'nums'=>$nums]);
    }

    /**
     * 视频播放
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function video($id)
    {
//        $qiniu = new QiniuController;
//        $url = $qiniu->getUrl();
//        dd($qiniu->getUrl());
//        \Auth::loginUsingId(2);
//        $user = User::where('id',1)->first();
//        dd($user);
        //权限规则1：（1）免费视频直接看（2）收费视频判断权限

        if(!\Auth::check()){
            return redirect('auth/login');
        }else{
            $data = Courseware::findOrFail($id);
            if($data->is_charge==1){
                $usergoods = UserGoods::find(1);
                if(Gate::denies('seeVipVideo',$usergoods)){
                    return redirect()->route('vip');
                }
            }
        }
        return view('home.video2',['data'=>$data]);
    }

    /**
     * 会员支付页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function vip()
    {
        return view('home.pay');
    }

    /**
     * 知识库
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function repository()
    {
        return view('home.repository');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search(Request $request)
    {
        $words = trim($request->get('words'));

        $model = Course::where('introduction','like',"%$words%")->get();

        return view('home.search',['model'=>$model]);
    }



}
