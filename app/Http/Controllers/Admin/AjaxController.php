<?php

namespace App\Http\Controllers\Admin;

use App\Model\Career;
use App\Model\Courseware;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\CareerCourse;
use App\Model\Course;
class AjaxController extends Controller
{
    /**
     * ajax添加课程到路径
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
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

    /**
     * ajax修改课程状态
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax_change_course_status(Request $request)
    {
        $model = Course::find($request->id);

        $model->status = ($model->status==1)?2:1;
        $res = $model->save();
        if($res){
            $msg['msg'] = $model->status;

        }
        return response()->json(['msg'=>$msg],200);
    }

    /**
     * ajax修改路径状态
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax_change_career_status(Request $request)
    {
        $model = Career::find($request->id);
        $model->status = ($model->status==1)?2:1;
        $res = $model->save();
        if($res){
            $msg['msg'] = $model->status;

        }
        return response()->json(['msg'=>$msg],200);
    }

    /**
     * ajax修改课件收费状态
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax_change_course_ware_charge(Request $request)
    {
        $model = Courseware::find($request->id);

        $model->is_charge = ($model->is_charge==1)?2:1;

        $res = $model->save();

        if($res){
            $msg['msg'] = $model->is_charge;
        }
        return response()->json(['msg'=>$msg],200);

    }
}
