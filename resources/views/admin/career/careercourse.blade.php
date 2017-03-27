@extends('admin.admin')

@section('content')
	<section class="content">
      	<div class="row">
	        <div class="col-xs-12">
	          	<div class="box">
		            <div class="box-header">
		              	<h3 class="box-title">路径-课程列表</h3>
		              	<a href="{{route('get_courselist',['career_id'=>$career_id])}}" class="btn btn-primary">添加课程到该路径</a>
		            </div>
	            	<div class="box-body">
	              		<table id="example1" class="table table-bordered table-striped">
			                <thead>
				                <tr>
				                  	<th>编号</th>
				                  	<th>路径id</th>
				                  	<th>课程id</th>
				                  	<th>创建时间</th>
				                  	<th>创建人</th>
				                  	<th>操作</th>
				                </tr>
			                </thead>
			                <tbody>
				                @foreach($datas as $data)
					                <tr>
					                  	<td>{{$data->id}}</td>
					                  	<td>{{$data->career_id}}</td>
					                  	<td>{{$data->course_id}}</td>
					                  	<td>{{$data->create_time}}</td>
					                  	<td>{{$data->create_user}}</td>
					                  	<td>
					                  		<a href="{{route('admin.course.show',['id'=>$data->course_id])}}">课程详情</a>|
					                  		<a href="{{route('get_careercourse_delete',['career_id'=>$data->career_id,'course_id'=>$data->course_id])}}" onclick="return confirm('确定删除吗？');">删除</a>
					                  	</td>
					                </tr>
				                @endforeach
			                </tbody>
			                <tfoot>
				                <tr>
				                </tr>
			                </tfoot>
		              	</table>
	            	</div>
	          	</div>
	        </div>
      	</div>
    </section>
@endsection