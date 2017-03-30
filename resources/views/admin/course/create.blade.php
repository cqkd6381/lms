@extends('admin.admin')

@section('content')
	<section class="content">
      	<div class="row">
	       	<div class="col-md-12">
	          	<!-- general form elements -->
	          	<div class="box box-primary">
		            <div class="box-header with-border">
		              	<h3 class="box-title">添加课程(提交后立马跳转到课件添加的地方)</h3>
		            </div>
	            	<!-- /.box-header -->
		            <!-- form start -->
		            <form role="form" action="{{route('admin.course.store')}}" method="post" enctype="multipart/form-data">
		            {{ csrf_field() }}
		              	<div class="box-body">
			                <div class="form-group">
			                  	<label for="title">课程名称</label>
			                  	<input type="text" class="form-control" name="title" id="title" placeholder="课程名称" required>
			                </div>
			                <div class="form-group">
			                  	<label for="code">课程编号（格式[0-9]{5,10}）（考虑是否需要系统生成）</label>
			                  	<input type="text" class="form-control" name="code" id="code" pattern="[0-9]{5,10}" placeholder="课程编号" required>
			                </div>
			                <div class="form-group">
			                  	<label>课程讲师（如果不存在，请先添加）</label>
			                  	<select class="form-control" name="teacher_id" required>
				                    <option value="1">老师A</option>
				                    <option value="2">老师B</option>
				                    <option value="3">老师C</option>
				                    <option value="4">老师D</option>
				                    <option value="5">老师E</option>
			                  	</select>
			                </div>
			                {{--<div class="form-group">
			                	<label>是否推荐</label>
			                	<input type="radio" name="is_recommend" value="1" checked="checked"> 是
			                	<input type="radio" name="is_recommend" value="2"> 否
			                </div>--}}
			                 <div class="form-group">
			                	<label>课程难度</label>
			                	<input type="radio" name="difficulty" value="1" checked="checked"> 初级
			                	<input type="radio" name="difficulty" value="2"> 中级
			                	<input type="radio" name="difficulty" value="3"> 高级
			                </div>
			                <div class="form-group">
			                	<label>课程所属分类</label>
			                	<table>
			                		<tr>
			                		@foreach($categorys as $category)
			                			<td width="100"><input type="radio" name="category_id" value="{{$category->id}}"> {{$category->name}}</td>
			                		@endforeach	
			                		</tr>
			                	</table>
			                </div>
			               	
			                <div class="form-group">
			                  	<label for="imgpath">课程图片</label>
			                  	<input type="file" id="imgpath" name="imgpath" required>

			                  	<p class="help-block">*注意：图片尺寸214x97</p>
			                </div>

			                <div class="form-group">
			                  	<label for="display_order">推荐顺序(1-9999数字越大，排序越靠前)</label>
			                  	<input type="number" class="form-control" name="display_order" id="display_order" min="1" max="9999" value="1" required>
			                </div>

			                <div class="form-group">
			                  	<label>课程介绍</label>
			                  	<textarea class="form-control" name="introduction" rows="3" placeholder="Enter ..."></textarea>
			                </div>
			                <div class="form-group">
			                  	<label>课程描述</label>
			                  	<textarea class="form-control" name="description" rows="5" placeholder="Enter ..."></textarea>
			                </div>
			                <!-- <div class="checkbox">
			                  	<label>
			                    	<input type="checkbox" name="is_send_email"> 是否邮件通知用户
			                  	</label>
			                </div> -->
		              	</div>
		              	<!-- /.box-body -->

		              	<div class="box-footer">
		                	<button type="submit" class="btn btn-primary">Submit</button>
		              	</div>
		            </form>
	          	</div>
	          	<!-- /.box -->
        	</div>
      	</div>
    </section>
@endsection