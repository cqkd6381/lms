<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * 注册页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getRegister()
    {
        return view('home.register');
    }

    /**
     * 用户注册处理
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postRegister(Request $request)
    {

        $this->validate($request, [
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password'=>'required|min:6'
        ]);

        $data = [
            'username'=>$request->get('username'),
            'email'=>$request->get('email'),
            'password'=>bcrypt($request->get('password')),
            'active'=>2,
            'type'=>2,
            'code'=>date('YmdHis').str_random(40)
        ];

        User::register($data);

        return view('home.viewmail',['email'=>$request->get('email')]);
    }

    /**
     * 通过邮件链接进行账户激活
     * @param $username
     * @param $code
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function code($username,$code)
    {
        $user = User::where('code','=',$code)->where('username','=',$username)->first();

        //验证过期的情况*********
        if($user){
            $user->active = 1;
            $user->save();
            return view('home.code');
        }else{
            //验证失败的情况逻辑***********
//1.已经存在了账号了，点击重新发送邮件2.
        }


    }
}
