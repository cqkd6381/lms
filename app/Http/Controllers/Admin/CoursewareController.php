<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Courseware;
use Illuminate\Support\Facades\Storage;
class CoursewareController extends Controller
{
    /**
     * 课件列表
     * @param $course_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function get_coursewarelist($course_id)
    {

        $datas = Courseware::where('course_id','=',$course_id)->orderBy('display_order','asc')->paginate(20);

        return view('admin.courseware.index',['datas'=>$datas,'course_id'=>$course_id]);
    }

    /**
     * 课件添加模板
     * @param $course_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function get_create_courseware($course_id)
    {
        return view('admin.courseware.create',['course_id'=>$course_id]);
    }

    /**
     * 添加课件
     * @param $course_id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function post_store_courseware($course_id,Requests\CoursewareRequest $request)
    {
        $filename = 'videos/'.date('Y-m').'/'.date('YmdHis').mt_rand(10,99).'.mp4';
        $res = Storage::disk('uploads')->put(
            $filename,
            file_get_contents($request->file('video')->getRealPath())
        );
        if($res){
            $data = new Courseware;
            $data->video_path = $filename;
            $data->title = $request->title;
            $data->course_id = $course_id;
            $data->minutes = $request->minutes;
            $data->display_order = $request->display_order;
            $data->description = $request->description;
            $data->created_at = date('Y-m-d H:i:s',time());
            $data->created_user = 1;
            $data->save();
            return redirect()->route('get_coursewarelist',['course_id'=>$course_id]);
        }else{
            return back();
        }
    }

    /**
     * 编辑课件頁面
     * @param $course_id
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function get_edit_courseware($course_id,$id)
    {
        $data = Courseware::where('course_id',$course_id)->where('id',$id)->first();
        return view('admin.courseware.edit',['data'=>$data]);
    }

    /**
     * 更新课件
     * @param $course_id
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function put_update_courseware($course_id,$id,Requests\CoursewareRequest $request)
    {
        $data = Courseware::where('course_id',$course_id)->where('id',$id)->first();
        if(!empty($request->video)){
            $filename = 'videos/'.date('Y-m').'/'.date('YmdHis').mt_rand(10,99).'.mp4';
            $res = Storage::disk('uploads')->put(
                $filename,
                file_get_contents($request->file('video')->getRealPath())
            );
            if($res){
                Storage::disk('uploads')->delete($data->video_path);
            }
            $data->video_path = $filename;
        }

        $data->title = $request->title;
        $data->minutes = $request->minutes;
        $data->display_order = $request->display_order;
        $data->description = $request->description;
        $data->save();
        return redirect()->route('get_coursewarelist',['course_id'=>$course_id]);
    }

    /**
     * 删除课件
     * @param $course_id
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function get_delete_courseware($course_id,$id)
    {
        $data = Courseware::where('course_id',$course_id)->where('id',$id)->first();

        $res = Storage::disk('uploads')->delete($data->video_path);
        if($res){
            $data->delete();
        }
        return redirect()->back();
    }
}
