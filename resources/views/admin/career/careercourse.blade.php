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
				                  	<th>路径名称</th>
				                  	<th>课程名称</th>
				                  	<th>课程编号</th>
				                  	<th>创建时间</th>
				                  	<th>创建人</th>
				                  	<th>操作</th>
				                </tr>
			                </thead>
			                <tbody>
				                @foreach($datas as $data)
					                <tr>
					                  	<td>{{$data->id}}</td>
					                  	<td>{{$data->name}}</td>
					                  	<td>{{$data->code}}</td>
					                  	<td>{{$data->title}}</td>
					                  	<td>{{$data->created_at}}</td>
					                  	<td>{{$data->username}}</td>
					                  	<td>
					                  		<a href="{{route('admin.course.show',['id'=>$data->course_id])}}">课程详情</a>|
					                  		<a href="{{route('get_careercourse_delete',['id'=>$data->id])}}" onclick="return confirm('确定删除吗？');">删除</a>
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