@extends('layouts.master')

@section('content')

    @include('errors.errors')

    <div class="col-md-2 col-md-offset-5">
        {!! Form::open(['url'=>'auth/login']) !!}

        <div class="form-group">
            {!! Form::label('email','邮箱:') !!}
            {!! Form::email('email',old('email'),['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password','密码:') !!}
            {!! Form::password('password',['class'=>'form-control']) !!}
        </div>

        {{--<div class="form-group">--}}
            {{--{!! Form::label('remmber','记住我:') !!}--}}
            {{--{!! Form::checkbox('remmber','记住我',['class'=>'form-control']) !!}--}}
        {{--</div>--}}

        {!! Form::submit('登录',['class'=>'btn btn-success form-control']) !!}
        {!! Form::close() !!}
    </div>
@stop