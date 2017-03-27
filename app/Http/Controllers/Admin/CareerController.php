<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Career;
use App\Model\CareerCourse;
use App\Model\Course;
use DB;
class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Career::orderBy('id', 'asc')->paginate(2);
        return view('admin.career.index',['datas'=>$datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.career.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $career = new Career;
        $career->name = $request->name;
        $career->tags = $request->tags;
        $career->imgpath = $request->imgpath;
        $career->introduction = $request->introduction;
        $career->description = $request->description;

        $career->status = 2;//默认关闭
        $career->create_time = time();
        $career->create_user = 1;
        $career->learning_nums = 0;
        $career->save();
        return redirect()->route('admin.career.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Career::where('id',$id)->first();
        // dd($data);
        return view('admin.career.edit',['data'=>$data]);
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
        $career = Career::find($id);
        $career->name = $request->name;
        $career->tags = $request->tags;
        $career->imgpath = $request->imgpath;
        $career->introduction = $request->introduction;
        $career->description = $request->description;
        $career->save();
        return redirect()->route('admin.career.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /*删除路径*/
    public function get_career_delete($id)
    {
        $career = Career::find($id);

        $career->delete();

        return redirect()->route('admin.career.index');
    }

    /*路径-课程-列表*/
    public function get_careercourse($career_id)
    {
        $datas = CareerCourse::where('career_id',$career_id)->get();
        // dd($data);
        return view('admin.career.careercourse',['datas'=>$datas,'career_id'=>$career_id]);
    }

    /*路径-课程-删除*/
    public function get_careercourse_delete($career_id,$course_id)
    {
        $data = CareerCourse::where('career_id',$career_id)->where('course_id',$course_id)->first();
        // dd($data);
        $data->delete();
        return redirect()->route('admin.career.get_careercourse',['career_id'=>$career_id]);
    }

     /*路径-课程-添加*/
    public function get_courselist($career_id)
    {
        $exist_courses = DB::table('career_course')->where('career_id',$career_id)->lists('course_id');
        // dd($exist_courses);
        $datas = Course::whereNotIn('id', $exist_courses)->orderBy('id', 'desc')->paginate(3);

        // dd($datas);
        return view('admin.career.courselist',['datas'=>$datas,'career_id'=>$career_id]);
    }

    /*ajax添加课程到路径*/
    public function ajax_career_course()
    {
        // $career_id = $request->career_id;
        // $dd = $request->dd;
        return 11;
    }
}
