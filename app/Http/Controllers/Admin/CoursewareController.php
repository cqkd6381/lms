<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Courseware;

class CoursewareController extends Controller
{
    /*课件列表*/
    public function get_coursewarelist($course_id)
    {
        // dd($course_id);
        $datas = Courseware::where('course_id','=',$course_id)->paginate(2);
        // dd($datas);
        return view('admin.courseware.index',['datas'=>$datas,'course_id'=>$course_id]);
    }

    /*添加课件模板*/
    public function get_create_courseware($course_id)
    {
        return view('admin.courseware.create',['course_id'=>$course_id]);
    }

     /*添加课件*/
    public function post_store_courseware($course_id,Request $request)
    {
        $data = new Courseware;
        $data->title = $request->title;
        $data->course_id = $course_id;
        $data->hours = $request->hours;
        $data->display_order = $request->display_order;
        $data->description = $request->description;
        $data->create_time = time();
        $data->save();
        return redirect()->route('get_coursewarelist',['course_id'=>$course_id]);
    }

    /*编辑课件*/
    public function get_edit_courseware($course_id,$id)
    {
        $data = Courseware::where('course_id',$course_id)->where('id',$id)->first();
        return view('admin.courseware.edit',['data'=>$data]);
    }

    /*更新课件*/
    public function post_update_courseware($course_id,$id,Request $request)
    {

        $data = Courseware::where('course_id',$course_id)->where('id',$id)->first();
        $data->title = $request->title;
        $data->hours = $request->hours;
        $data->display_order = $request->display_order;
        $data->description = $request->description;
        $data->save();
        return redirect()->route('get_coursewarelist',['course_id'=>$course_id]);
    }

    /*删除课件*/
    public function get_delete_courseware($course_id,$id)
    {
        $data = Courseware::where('course_id',$course_id)->where('id',$id)->delete();
        return redirect()->route('get_coursewarelist',['course_id'=>$course_id]);
    }
}
