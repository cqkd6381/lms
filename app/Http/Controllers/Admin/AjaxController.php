<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\CareerCourse;
use App\Model\Course;
class AjaxController extends Controller
{
    /*ajax添加课程到路径*/
    public function ajax_career_course(Request $request)
    {
        $model = new CareerCourse;
        $model->career_id = $request->career_id;
        $model->course_id = $request->dd;
        $model->created_user = $request->user_id;
        $res = $model->save();
        // $res = true;
        if($res){
            $msg['msg'] = "添加成功";
            $msg['code'] = 1;
        }else{
            $msg['msg'] = "添加失败，请重试";
            $msg['code'] = 0;
        }
        return response()->json(array('msg'=> $msg), 200);
    }

    /*ajax修改课程状态*/
    public function ajax_change_course_status(Request $request)
    {
        $id = $request->dd;
        $status = Course::where('id','=',$id)->value('status');
        
        $new_status = ($status=='开启')?'2':'1';
        $status_text = ($status=='开启')?'关闭':'开启';
        $addclass = ($status=='开启')?'btn-default':'btn-success';
        $removeclass = ($status=='开启')?'btn-success':'btn-default';
        $res = Course::where('id','=',$id)->update(['status' => $new_status]);
        if($res){
            $msg['msg'] = "更新成功";
            $msg['code'] = 1;
            $msg['status_text'] = $status_text;
            $msg['removeclass'] = $removeclass;
            $msg['addclass'] = $addclass;
        }else{
            $msg['msg'] = "更新失败，请重试";
            $msg['code'] = 0;
        }
        return response()->json(array('msg'=> $msg), 200);
    }
}
