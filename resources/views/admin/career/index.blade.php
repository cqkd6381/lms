@extends('admin.admin')

@section('content')
	<section class="content">
      	<div class="row">
	        <div class="col-xs-12">
	          	<div class="box">
		            <div class="box-header">
		              	<h3 class="box-title">职业路径列表</h3>
		            </div>
	            	<div class="box-body">
	              		<table id="example1" class="table table-bordered table-striped">
			                <thead>
				                <tr>
				                  	<th>编号</th>
				                  	<th>路径名称</th>
				                  	<th>课程数量</th>
				                  	<th>显示顺序</th>
				                  	<th>创建时间</th>
				                  	<th>创建人</th>
				                  	<th>状态</th>
				                  	<th>操作</th>
				                </tr>
			                </thead>
			                <tbody>
				                <tr>
				                  	<td>1</td>
				                  	<td>大数据工程师</td>
				                  	<td>9</td>
				                  	<td>1</td>
				                  	<td>2017-03-24</td>
				                  	<td>admin</td>
				                  	<td>开启</td>
				                  	<td>
				                  		编辑|添加课程|删除
				                  	</td>
				                </tr>
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