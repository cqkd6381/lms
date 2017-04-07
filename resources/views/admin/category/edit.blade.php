@extends('admin.admin')

@section('content')
    <section class="content">
        @include('errors.adminerrors')
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">编辑课程分类</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('admin.category.update',['id'=>$data->id])}}" method="post">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">分类名称</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{$data->name}}">
                            </div>
                            <div class="form-group">
                                <label>分类描述</label>
                                <textarea class="form-control" name="description" rows="5">{{$data->description}}</textarea>
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