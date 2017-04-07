<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Career;
use App\Model\CareerCourse;
use App\Model\Course;
use DB;
use Illuminate\Support\Facades\Storage;
class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Career::where('pid','=',0)->orderBy('id', 'asc')->paginate(15);
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
    public function store(Requests\CareerRequest $request)
    {
        $filename = 'images/career/'.date('Y-m').'/'.date('YmdHis').mt_rand(10,99).'.png';
        $res = Storage::disk('uploads')->put(
            $filename,
            file_get_contents($request->file('imgpath')->getRealPath())
        );
        if($res){
            $career = new Career;
            $career->name = $request->name;
            $career->imgpath = $filename;
            $career->introduction = $request->introduction;
            $career->description = $request->description;

            $career->pid = 0;//顶级分类
            $career->status = 2;//默认关闭
            $career->created_at = date('Y-m-d H:i:s',time());
            $career->created_user = \Auth::user()->id;
            $career->learning_nums = 0;
            $career->save();
        }
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
        return view('admin.career.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\CareerRequest $request, $id)
    {
        $career = Career::findOrFail($id);
        if(!empty($request->imgpath)){
            $filename = 'images/career/'.date('Y-m').'/'.date('YmdHis').mt_rand(10,99).'.png';
            $res = Storage::disk('uploads')->put(
                $filename,
                file_get_contents($request->file('imgpath')->getRealPath())
            );
            if($res){
                Storage::disk('uploads')->delete($career->imgpath);
            }
            $career->imgpath = $filename;
        }
        $career->name = $request->name;
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

    /**
     * 删除路径
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function get_career_delete($id)
    {
        //删除图片、遍历删除子分类与career_course的关联、删除子分类、删除路径、
        $career = Career::findOrFail($id);
        $res = Storage::disk('uploads')->delete($career->imgpath);
        if($res){
            $career_sons = Career::where('pid',$career->id)->get();
            foreach($career_sons as $v){
                $v->courses()->detach();
            }
            Career::where('pid',$career->id)->delete();
            $career->delete();
        }
        return redirect()->route('admin.career.index');
    }

    /**
     * 路径-课程-列表
     * @param $career_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function get_careercourse($career_id)
    {
        $datas = CareerCourse::leftjoin('career as a','a.id','=','career_course.career_id')
        ->leftjoin('course as b','b.id','=','career_course.course_id')
        ->leftjoin('users as c','c.id','=','career_course.created_user')
        ->where('career_id',$career_id)->select('a.name','b.title','b.code','c.username','career_course.*')->get();
        // dd($datas);
        return view('admin.career.careercourse',['datas'=>$datas,'career_id'=>$career_id]);
    }

    /**
     * 路径-课程-删除
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function get_careercourse_delete($id)
    {
        $data = CareerCourse::where('id',$id)->first();
        // dd($data);
        $data->delete();
        return back();
    }

    /**
     * 路径-课程-添加
     * @param $career_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function get_courselist($career_id)
    {
        $exist_courses = DB::table('career_course')->where('career_id',$career_id)->lists('course_id');
        // dd($exist_courses);
        $datas = Course::whereNotIn('id', $exist_courses)->orderBy('id', 'desc')->paginate(10);

        // dd($datas);
        return view('admin.career.courselist',['datas'=>$datas,'career_id'=>$career_id]);
    }

    /**
     * 路径-子分类-列表
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function careerCategory($id)
    {
        $datas = Career::where('pid','=',$id)->get();
        return view('admin.career.category-index',['datas'=>$datas,'id'=>$id]);
    }

    /**
     * 路径-子分类-添加
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createCategory($id)
    {
        return view('admin.career.category-create',['id'=>$id]);
    }

    /**
     * 路径-子分类-保存
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeCategory(Requests\CareerCategoryRequest $request)
    {
        Career::create([
            'name'=>$request->name,
            'pid'=>$request->pid,
            'introduction'=>$request->introduction,
            'created_user'=>1,
            'created_at'=>date('Y-m-d H:i:s',time())
        ]);

        return redirect()->route('admin.career.career_category',['id'=>$request->pid]);
    }

    /**
     * 路径-子分类-编辑
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editCategory($id)
    {
        $data = Career::where('id',$id)->first();
        return view('admin.career.category-edit',['data'=>$data]);
    }

    public function updateCategory(Requests\CareerCategoryRequest $request, $id)
    {
        Career::where('id',$id)->update(['name'=>$request->name,'introduction'=>$request->introduction]);

        return redirect()->back();
    }
    
}
