@extends('admin.admin')

@section('content')
	<section class="content">
      	<div class="row">
	        <div class="col-xs-12">
	          	<div class="box">
		            <div class="box-header">
		              	<h3 class="box-title">课件列表</h3>
		              	<a  href="{{route('get_create_courseware',['course_id'=>$course_id])}}" class="btn btn-primary">添加课件</a>
		            </div>
	            	<div class="box-body">
	              		<table id="example1" class="table table-bordered table-striped">
			                <thead>
				                <tr>
				                  	<th>编号</th>
				                  	<th>课件名称</th>
				                  	<th>所属课程id</th>
				                  	<th>文件大小</th>
				                  	<th>课件时长(分钟)</th>
				                  	<th>创建时间</th>
				                  	<th>显示顺序</th>
				                  	<th>文件路径</th>
				                  	<th>是否收费</th>
				                  	<th>状态</th>
				                  	<th>操作</th>
				                </tr>
			                </thead>
			                <tbody>
			                	@foreach($datas as $data)
					                <tr>
					                  	<td>{{$data->id}}</td>
					                  	<td>{{$data->title}}</td>
					                  	<td>{{$data->course_id}}</td>
					                  	<td>{{$data->filesize}}</td>
					                  	<td>{{$data->minutes}}</td>
					                  	<td>{{$data->created_at}}</td>
					                  	<td>{{$data->display_order}}</td>
					                  	<td>{{$data->video_path}}</td>
					                  	<td>
					                  		<button type="button" class="btn btn-block btn-success btn-xs">免 费</button>
					                  	</td>
					                  	<td>1</td>
					                  	<td>
					                  		<a href="{{route('get_show_courseware',['course_id'=>$course_id,'id'=>$data->id])}}">详情</a>|
					                  		<a href="{{route('get_edit_courseware',['course_id'=>$course_id,'id'=>$data->id])}}">编辑</a>|
					                  		<a href="{{route('get_delete_courseware',['course_id'=>$course_id,'id'=>$data->id])}}" onclick="return confirm('确定将课件一起删除吗？');">删除</a>
					                  	</td>
					                </tr>
				                @endforeach
			                </tbody>
			                <tfoot>
				                <tr></tr>
			                </tfoot>
		              	</table>
		              	<div class="text-right">
	                		{!! $datas->render() !!}
	                	</div>
	            	</div>
	          	</div>
	        </div>
      	</div>
    </section>
@endsection
