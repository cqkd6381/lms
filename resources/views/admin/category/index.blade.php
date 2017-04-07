@extends('admin.admin')

@section('content')
	<section class="content">
      	<div class="row">
	        <div class="col-xs-12">
	          	<div class="box">
		            <div class="box-header">
		              	<h3 class="box-title">分类列表</h3>
		            	<a href="{{route('admin.category.create')}}" class="btn btn-primary text-right">添加分类</a>
		            </div>
	            	<div class="box-body">
	              		<table id="example1" class="table table-bordered table-striped">
			                <thead>
				                <tr>
				                  	<th>编号</th>
				                  	<th>分类名称</th>
				                  	<th>创建人</th>
				                  	<th>创建时间</th>
				                  	<th>更新时间</th>
				                  	<th>操作</th>
				                </tr>
			                </thead>
			                <tbody>
				                @foreach($categorys as $category)
				                	<tr>
					                  	<td>{{$category->id}}</td>
					                  	<td>{{$category->name}}</td>
					                  	<td>{{$category->created_user}}</td>
					                  	<td>{{$category->created_at}}</td>
					                  	<td>{{$category->updated_at}}</td>
					                  	<td>
											<a href="{{route('admin.category.edit',['id'=>$category->id])}}">编辑</a>
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
	                		{!! $categorys->render() !!}
	                	</div>
	            	</div>
	          	</div>
	        </div>
      	</div>
    </section>
@endsection