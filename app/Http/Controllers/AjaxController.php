<?php

namespace App\Http\Controllers;

use App\Model\CourseComment;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{

    public function commentStore(Request $request)
    {
        $res = CourseComment::create([
            'comment'=>$request->text,
            'user_id'=>$request->user_id,
            'course_id'=>$request->course_id,
        ]);
        $res->username = $res->user->username;
        $comment = "<li><div><p>".$res->comment."</p><p>时间：".$res->created_at." ".$res->username."</p></div></li>";
        if($res){
            $msg = ['msg'=>'添加成功','code'=>1,'comment'=>$comment];
        }else{
            $msg = ['msg'=>'添加失败','code'=>0];
        }
        return response()->json(array('msg'=> $msg), 200);
    }
}
