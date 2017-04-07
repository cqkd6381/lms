@extends('admin.admin')

@section('content')
	<section class="content">
		@include('errors.adminerrors')
      	<div class="row">
	       	<div class="col-md-12">
	          	<!-- general form elements -->
	          	<div class="box box-primary">
		            <div class="box-header with-border">
		              	<h3 class="box-title">编辑课程</h3>
		            </div>
	            	<!-- /.box-header -->
		            <!-- form start -->
		            <form role="form" action="{{route('admin.course.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
		            {{ csrf_field() }}
		            {{ method_field('PUT') }}
		              	<div class="box-body">
			                <div class="form-group">
			                  	<label for="title">课程名称</label>
			                  	<input type="text" class="form-control" name="title" value="{{$data->title}}" id="title" placeholder="课程名称" required>
			                </div>
			                <div class="form-group">
			                  	<label for="code">课程编号（格式[A-z0-9]+）（考虑是否需要系统生成）</label>
			                  	<input type="text" class="form-control" name="code" value="{{$data->code}}" id="code" pattern="[A-z0-9]+" placeholder="课程编号" required>
			                </div>
			                <div class="form-group">
			                  	<label>课程讲师（如果不存在，请先添加）</label>
								<table>
									<tr>
										@foreach($teachers as $teacher)
											<td width="100">
												<input type="radio" name="teacher_id" <?php echo $data->teacher_id==$teacher->id?'checked':''; ?> value="{{$teacher->id}}"> {{$teacher->realname}}
											</td>
										@endforeach
									</tr>
								</table>
			                </div>
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
											<td width="100"><input type="radio" name="category_id" <?php echo $data->category_id==$category->id?'checked':''; ?> value="{{$category->id}}"> {{$category->name}}</td>
										@endforeach
									</tr>
								</table>
			                </div>
			               
			                <div class="form-group">
			                  	<label for="imgpath">课程图片</label>
			                  	<input type="file" id="imgpath" name="imgpath">

			                  	<p class="help-block">*注意：图片尺寸214x97</p>
			                </div>

			                <div class="form-group">
			                  	<label for="display_order">显示顺序(1-9999数字越大，排序越靠前)</label>
			                  	<input type="number" class="form-control" name="display_order" value="{{$data->display_order}}" id="display_order" min="1" max="9999" value="1" required>
			                </div>

			                <div class="form-group">
			                  	<label>课程介绍</label>
			                  	<textarea class="form-control" name="introduction" rows="3" placeholder="Enter ...">{{$data->introduction}}</textarea>
			                </div>
			                <div class="form-group">
			                  	<label>课程描述</label>
			                  	<textarea class="form-control" name="description" rows="5" placeholder="Enter ...">{{$data->description}}</textarea>
			                </div>
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