@extends('admin.admin')

@section('content')
	<section class="content">
		@include('errors.adminerrors')
      	<div class="row">
	       	<div class="col-md-12">
	          	<!-- general form elements -->
	          	<div class="box box-primary">
		            <div class="box-header with-border">
		              	<h3 class="box-title">编辑课件</h3>
		            </div>
	            	<!-- /.box-header -->
		            <!-- form start -->
		            <form role="form" action="{{route('put_update_courseware',['id'=>$data->id,'course_id'=>$data->course_id])}}" method="post" enctype="multipart/form-data">
		            {{ csrf_field() }}
					{{ method_field('PUT') }}
		              	<div class="box-body">
			                <div class="form-group">
			                  	<label for="title">课件名称</label>
			                  	<input type="text" class="form-control" name="title" value="{{$data->title}}" id="title">
			                </div>

							<div class="form-group">
								<label for="video">课件文件(.mp4文件,可不填)</label>
								<input type="file" class="form-control" name="video" id="video">
							</div>

			                <div class="form-group">
			                  	<label for="minutes">课件时长</label>
			                  	<input type="text" class="form-control" name="minutes" value="{{$data->minutes}}" id="minutes">
			                </div>

			                <div class="form-group">
			                  	<label for="display_order">显示顺序(1-9999数字越大，排序越靠后)</label>
			                  	<input type="number" class="form-control" name="display_order" value="{{$data->display_order}}" id="display_order" min="1" max="9999">
			                </div>
			                <div class="form-group">
			                  	<label>课件描述</label>
			                  	<textarea class="form-control" name="description" rows="5">{{$data->description}}</textarea>
			                </div>
		              	</div>
		              	<!-- /.box-body -->

		              	<div class="box-footer">
		                	<button type="submit" class="btn btn-primary">提交</button>
		              	</div>
		            </form>
	          	</div>
	          	<!-- /.box -->
        	</div>
      	</div>
    </section>
@endsection