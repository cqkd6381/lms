@extends('admin.admin')

@section('content')
	<section class="content">
      	<div class="row">
	        <div class="col-xs-12">
	          	<div class="box">
		            <div class="box-header">
		              	<h3 class="box-title">职业路径列表</h3>
		              	<a href="{{route('admin.career.create')}}" class="btn btn-primary text-right">添加路径</a>
		            </div>
	            	<div class="box-body">
	              		<table id="example1" class="table table-bordered table-striped">
			                <thead>
				                <tr>
				                  	<th>编号</th>
				                  	<th>路径名称</th>
				                  	<th>课程数量</th>
				                  	<th>学习人数</th>
				                  	<th>创建时间</th>
				                  	<th>创建人</th>
				                  	<th>状态</th>
				                  	<th>操作</th>
				                </tr>
			                </thead>
			                <tbody>
				                @foreach($datas as $data)
					                <tr>
					                  	<td>{{$data->id}}</td>
					                  	<td>{{$data->name}}</td>
					                  	<td>4</td>
					                  	<td>{{$data->learning_nums}}</td>
					                  	<td>{{$data->created_at}}</td>
					                  	<td>{{$data->created_user}}</td>
										<td>
											@if ($data->status=='1')
												<button class="btn btn-block btn-success btn-xs status" dd="{{$data->id}}">开启</button>
											@else
												<button class="btn btn-block btn-default btn-xs status" dd="{{$data->id}}">关闭</button>
											@endif
										</td>
					                  	<td>
					                  		<a href="{{route('admin.career.show',['id'=>$data->id])}}">详情</a>|
					                  		<a href="{{route('admin.career.edit',['id'=>$data->id])}}">编辑</a>|
											<a href="{{route('admin.career.career_category',['id'=>$data->id])}}">子分类管理</a>|
					                  		<a href="{{route('get_career_delete',['id'=>$data->id])}}" onclick="return confirm('确定删除吗？');">删除</a>
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
	<script>
        $(function(){
            $('.status').click(function(){
                var btn = $(this);
                var dd = btn.attr('dd');
                $.ajax({
                    type:"post",
                    url:"{{route('ajax_change_career_status')}}",
                    data:"id=" + dd,
                    success:function(data){
//                        console.log(dd);
                        if(data.msg.msg==1){
                            btn.text('开启').removeClass('btn-default').addClass('btn-success');
                        }else if(data.msg.msg==2){
                            btn.text('关闭').removeClass('btn-success').addClass('btn-default');
                        }
                    }
                });
            });
        });
	</script>
@endsection