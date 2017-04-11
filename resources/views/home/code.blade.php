@extends('layouts.master')

@section('title')
    在线学习平台
@endsection

@section('content')
<div class="container">
    <h2>恭喜你！邮箱验证成功！</h2>
    <a href="/auth/login" class="btn btn-success">点此登录</a>
</div>
@endsection