@extends('admin.admin')

@section('content')
    <section class="content">
        @include('errors.adminerrors')
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">添加子分类</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('admin.career.update_category',['id'=>$data->id])}}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">子分类名称</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{$data->name}}">
                            </div>

                            <div class="form-group">
                                <label>子分类介绍</label>
                                <textarea class="form-control" name="introduction" rows="3">{{$data->introduction}}</textarea>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
@endsection