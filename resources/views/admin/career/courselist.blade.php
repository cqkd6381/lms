@extends('admin.admin')

@section('content')
	<section class="content">
      	<div class="row">
	        <div class="col-xs-12">
	          	<div class="box">
		            <div class="box-header">
		              	<h3 class="box-title">选择需要添加到该路径的课程</h3>
		            </div>
	            	<div class="box-body">
	              		<table id="example1" class="table table-bordered table-striped">
			                <thead>
				                <tr>
				                  	<th>编号</th>
				                  	<th>课程名称</th>
				                  	<th>课程编号</th>
				                  	<th>课件总数</th>
				                  	<th>课件时长(h)</th>
				                  	<th>创建时间</th>
				                  	<th>发布时间</th>
				                  	<th>显示顺序</th>
				                  	<th>是否推荐</th>
				                  	<th>状态</th>
				                  	<th>是否添加</th>
				                  	<th>操作</th>
				                </tr>
			                </thead>
			                <tbody>
			                	@foreach($datas as $data)
					                <tr>
					                  	<td>{{$data->id}}</td>
					                  	<td>{{$data->title}}</td>
					                  	<td>{{$data->code}}</td>
					                  	<td>{{$data->courseware_num}}</td>
					                  	<td>{{$data->hours}}</td>
					                  	<td>{{$data->create_time}}</td>
					                  	<td>{{$data->publish_time}}</td>
					                  	<td>{{$data->display_order}}</td>
					                  	<td>{{$data->is_recommend}}</td>
					                  	<td>{{$data->status}}</td>
					                  	<td>
					                  		<button dd="{{$data->id}}" class="btn btn-block btn-success btn-xs add-to-career">添加</button>
					                  	</td>
					                  	<td>
					                  		<a href="{{route('admin.course.show',['id'=>$data->id])}}">详情</a>|
					                  		<a href="{{route('admin.course.edit',['id'=>$data->id])}}">编辑</a>|
					                  		<a href="{{route('get_coursewarelist',['course_id'=>$data->id])}}">课件管理</a>|
					                  		<a href="{{route('get_course_delete',['id'=>$data->id])}}" onclick="return confirm('确定删除吗？');">删除</a>
					                  	</td>
					                </tr>
				                @endforeach
			                </tbody>
			                <tfoot>
				                <tr>
				                </tr>
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
@section('script')
<script type="text/javascript">
	$('.add-to-career').click(function(){
		var btn = $(this);
		var dd = btn.attr('dd');
		var career_id = {{$career_id}};
		var tr = btn.parent().parent();
		tr.hide("slow");
		return false;

		//ajax无法发送问题
		$.ajax({
			type:"post",
			url:"{{route('ajax_career_course')}}",
			data:"dd=" + dd +"&career_id=" + career_id,
			success:function(msg){
				console.log(msg);
			}

		});
		console.log(dd);
		console.log(tr);
		// alert(22)
	});
</script>
@endsection
