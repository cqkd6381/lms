<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Course;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Course::orderBy('id', 'asc')->paginate(2);
        // dd($data);
        return view('admin.course.index',compact('datas',$datas));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = new Course;
        $data->title = $request->title;
        $data->code = $request->code;
        $data->teacher_id = $request->teacher_id;
        $data->is_recommend = $request->is_recommend;
        $data->difficulty = $request->difficulty;
        $data->categorys = $request->categorys;
        $data->imgpath = $request->imgpath;
        $data->display_order = $request->display_order;
        $data->introduction = $request->introduction;
        $data->description = $request->description;

        $data->hours = 0;
        $data->courseware_num = 0;
        $data->is_latest = 1;
        $data->fee = 0.00;//暂不启用
        $data->status = 2;//默认关闭
        $data->create_time = time();
        $data->create_user = 3;
        $data->save();
        return redirect()->route('admin.course.index');

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
        // dd($datas);
        return view('admin.course.edit',compact('data',$data));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        // dd($course);
        // dd($request->all());
        $course->title = $request->title;
        $course->code = $request->code;
        $course->teacher_id = $request->teacher_id;
        $course->is_recommend = $request->is_recommend;
        $course->difficulty = $request->difficulty;
        $course->categorys = $request->categorys;
        $course->imgpath = $request->imgpath;
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
        $course = Course::find($id);

        $course->delete();

        return redirect()->route('admin.course.index');
    }


}
