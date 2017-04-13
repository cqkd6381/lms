@extends('layouts.master')

@section('content')
    @include('errors.errors')

    <div class="col-md-2 col-md-offset-5">
        {!! Form::open(['url'=>'/register']) !!}

        <div class="form-group">
            {!! Form::label('username','用户名:') !!}
            {!! Form::text('username',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email','邮箱:') !!}
            {!! Form::email('email',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password','密码:') !!}
            {!! Form::password('password',['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password_confirmation','确认密码:') !!}
            {!! Form::password('password_confirmation',['class'=>'form-control']) !!}
        </div>

        {!! Form::submit('注册',['class'=>'btn btn-primary form-control']) !!}
        {!! Form::close() !!}
    </div>
@stop