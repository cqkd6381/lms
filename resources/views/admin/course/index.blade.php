@extends('admin.admin')

@section('content')
	<section class="content">
      	<div class="row">
	        <div class="col-xs-12">
	          	<div class="box">
		            <div class="box-header">
		              	<h3 class="box-title">课程列表</h3>
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
				                  	<th>操作</th>
				                </tr>
			                </thead>
			                <tbody>
				                <tr>
				                  	<td>1</td>
				                  	<td>shell编程之变量</td>
				                  	<td>56451123</td>
				                  	<td>8</td>
				                  	<td>8</td>
				                  	<td>2017-03-24 00:00:00</td>
				                  	<td>2017-03-24 00:00:00</td>
				                  	<td>1</td>
				                  	<td>否</td>
				                  	<td>关闭</td>
				                  	<td>
				                  		<a href="">详情</a>|
				                  		<a href="">编辑</a>|
				                  		<a href="{{route('admin.course.create',['id'=>1])}}">添加课件</a>|
				                  		<a href="">删除</a>
				                  	</td>
				                </tr>
				                
			                </tbody>
			                <tfoot>
				                <tr></tr>
			                </tfoot>
		              	</table>
	            	</div>
	          	</div>
	        </div>
      	</div>
    </section>
@endsection