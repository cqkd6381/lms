@extends('admin.admin')

@section('content')
	<section class="content">
		@include('errors.adminerrors')
      	<div class="row">
	       	<div class="col-md-12">
	          	<!-- general form elements -->
	          	<div class="box box-primary">
		            <div class="box-header with-border">
		              	<h3 class="box-title">添加职业路径</h3>
		            </div>
	            	<!-- /.box-header -->
		            <!-- form start -->
		            <form role="form" action="{{route('admin.career.store')}}" method="post" enctype="multipart/form-data">
		            	{{ csrf_field() }}
		              	<div class="box-body">
			                <div class="form-group">
			                  	<label for="name">路径名称</label>
			                  	<input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
			                </div>

			                <div class="form-group">
			                  	<label for="imgpath">路径图片</label>
			                  	<input type="file" id="imgpath" name="imgpath">

			                  	<p class="help-block">*注意：图片尺寸214x97</p>
			                </div>

			                <div class="form-group">
			                  	<label>路径介绍</label>
			                  	<textarea class="form-control" name="introduction" rows="3">{{old('introduction')}}</textarea>
			                </div>
			                <div class="form-group">
			                  	<label>路径描述</label>
			                  	<textarea class="form-control" name="description" rows="5">{{old('description')}}</textarea>
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