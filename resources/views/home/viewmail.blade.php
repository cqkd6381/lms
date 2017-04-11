@extends('layouts.master')

@section('title')
    在线学习平台
@endsection

@section('content')
    <div class="container">
        <h2>验证邮件已发送至您的{{$email}}邮箱！请前往激活账号。</h2>
        <a href="/auth/login" class="btn btn-success">点此登录</a>
    </div>
@endsection