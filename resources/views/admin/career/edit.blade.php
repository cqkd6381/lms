@extends('admin.admin')

@section('content')
	<section class="content">
		@include('errors.adminerrors')
      	<div class="row">
	       	<div class="col-md-12">
	          	<!-- general form elements -->
	          	<div class="box box-primary">
		            <div class="box-header with-border">
		              	<h3 class="box-title">编辑路径</h3>
		            </div>
	            	<!-- /.box-header -->
		            <!-- form start -->
		            <form role="form" action="{{route('admin.career.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
		            {{ csrf_field() }}
		            {{ method_field('PUT') }}
		              	<div class="box-body">
			                <div class="form-group">
			                  	<label for="name">路径名称</label>
			                  	<input type="text" class="form-control" name="name" id="name" value="{{$data->name}}">
			                </div>
			               	
			                <div class="form-group">
			                  	<label for="imgpath">路径图片</label>
			                  	<input type="file" id="imgpath" name="imgpath">

			                  	<p class="help-block">*注意：图片尺寸214x97</p>
			                </div>

			                <div class="form-group">
			                  	<label>路径介绍</label>
			                  	<textarea class="form-control" name="introduction" rows="3">{{$data->introduction}}</textarea>
			                </div>
			                <div class="form-group">
			                  	<label>路径描述</label>
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