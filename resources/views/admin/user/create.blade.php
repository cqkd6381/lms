@extends('admin.admin')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">添加用户</h3>
                    </div>
                    {!! Form::open() !!}
                        <div class="box-body">
                            <div class="form-group">
                                {!! Form::label('姓名') !!}
                                {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'姓名']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('手机号') !!}
                                {!! Form::text('cellphone',null,['class'=>'form-control','placeholder'=>'手机号']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
@endsection