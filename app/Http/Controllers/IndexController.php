<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
	/*线上课程列表*/
    public function index()
    {
    	return view('home.index');
    }

    /*线上课程详情*/
    public function course($id)
    {
    	return view('home.course',['id'=>$id]);
    }

    /*线下课程列表*/
    public function scene()
    {
    	return view('home.scene');
    }

    /*职业路径列表*/
    public function career()
    {
    	return view('home.career');
    }

    /*职业路径详情*/
    public function class($id)
    {
    	return view('home.class',['id'=>$id]);
    }
}
