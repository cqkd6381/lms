<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Course;
use App\Model\Category;
use App\Model\User;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Course::orderBy('id', 'desc')->paginate(16);
        return view('admin.course.index',compact('datas',$datas));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = Category::select('id','name')->get();
        $teachers = User::where('type',5)->get();
        return view('admin.course.create',['categorys'=>$categorys,'teachers'=>$teachers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CreateCourseRequest $request)
    {
        $filename = 'images/course/'.date('Y-m').'/'.date('YmdHis').mt_rand(10,99).'.png';
        $res = Storage::disk('uploads')->put(
            $filename,
            file_get_contents($request->file('imgpath')->getRealPath())
        );
        if($res){
            $data = new Course;
            $data->title = $request->title;
            $data->code = $request->code;
            $data->teacher_id = $request->teacher_id;
            $data->difficulty = $request->difficulty;
            $data->category_id = $request->category_id;
            $data->imgpath = $filename;
            $data->display_order = $request->display_order;
            $data->introduction = $request->introduction;
            $data->description = $request->description;

            $data->minutes = 0;
            $data->courseware_nums = 0;
            $data->learning_nums = 0;
            $data->is_latest = 1;
            $data->is_recommend = 1;//已废弃（可更改为其他字段）
            $data->fee = 0.00;//暂不启用
            $data->status = 2;//默认关闭
            $data->published_time = date('Y-m-d H:i:s',time());
            $data->created_user = \Auth::user()->id;
            $data->save();
            return redirect()->route('admin.course.index');
        }else{
            return back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Course::find($id);
        $categorys = Category::select('id','name')->get();
        $teachers = User::where('type',5)->get();
        return view('admin.course.edit',['data'=>$data,'teachers'=>$teachers,'categorys'=>$categorys]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\CreateCourseRequest $request, $id)
    {
        $course = Course::find($id);
        if(!empty($request->imgpath)){
            $filename = 'images/'.date('Y-m').'/'.date('YmdHis').mt_rand(10,99).'.png';
            $res = Storage::disk('uploads')->put(
                $filename,
                file_get_contents($request->file('imgpath')->getRealPath())
            );
            if($res){
//                Storage::disk('uploads')->delete($course->imgpath);
            }
            $course->imgpath = $filename;
        }
        $course->title = $request->title;
        $course->code = $request->code;
        $course->teacher_id = $request->teacher_id;
        $course->difficulty = $request->difficulty;
        $course->category_id = $request->category_id;
        $course->display_order = $request->display_order;
        $course->introduction = $request->introduction;
        $course->description = $request->description;
        $course->save();
        return redirect()->route('admin.course.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function get_course_delete($id)
    {
        $course = Course::findOrFail($id);
        $res = Storage::disk('uploads')->delete($course->imgpath);
        if($res){
            $course->delete();
        }
        return redirect()->route('admin.course.index');
    }


}
