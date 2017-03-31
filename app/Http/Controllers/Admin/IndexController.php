<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * IndexController constructor.
     */
    public function __construct()
    {
//        $this->middleware('admin',['only'=>['index','store']]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        \Auth::loginUsingId(1);

    	return view('admin.index.index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store()
    {
        return view('admin.index.index');
    }
}
