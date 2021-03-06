@extends('admin.admin')

@section('content')
	<section class="content">
      	<div class="row">
	        <div class="col-xs-12">
	          	<div class="box">
		            <div class="box-header">
		              	<h3 class="box-title">用户列表</h3>
		            </div>
	            	<div class="box-body">
	              		<table id="example1" class="table table-bordered table-striped">
			                <thead>
				                <tr>
				                  	<th>编号</th>
				                  	<th>用户名</th>
				                  	<th>姓名</th>
				                  	<th>手机号</th>
				                  	<th>最近登录时间</th>
				                  	<th>创建时间</th>
				                  	<th>学习时长(h)</th>
				                  	<th>会员状态</th>
				                  	<th>状态</th>
				                  	<th>操作</th>
				                </tr>
			                </thead>
			                <tbody>
				                @foreach($users as $user)
				                	<tr>
					                  	<td>{{$user->id}}</td>
					                  	<td>{{$user->username}}</td>
					                  	<td>{{$user->realname}}</td>
					                  	<td>{{$user->mobilephone}}</td>
					                  	<td>{{$user->last_login_time}}</td>
					                  	<td>{{$user->created_at}}</td>
					                  	<td>520</td>
					                  	<td>6个月</td>
					                  	<td>{{$user->active}}</td>
					                  	<td>
					                  		详情 | 编辑
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
	                		{!! $users->render() !!}
	                	</div>
	            	</div>
	          	</div>
	        </div>
      	</div>
    </section>
@endsection