@extends('admin.admin')

@section('content')
	<section class="content">
      	<div class="row">
	       	<div class="col-md-12">
	          	<!-- general form elements -->
	          	<div class="box box-primary">
		            <div class="box-header with-border">
		              	<h3 class="box-title">添加课程</h3>
		            </div>
	            	<!-- /.box-header -->
		            <!-- form start -->
		            <form role="form" action="" method="post">
		              	<div class="box-body">
			                <div class="form-group">
			                  	<label for="title">课程名称</label>
			                  	<input type="text" class="form-control" name="title" id="title" placeholder="课程名称" required>
			                </div>
			                <div class="form-group">
			                  	<label for="code">课程编号（格式[A-z0-9]+）（考虑是否需要系统生成）</label>
			                  	<input type="text" class="form-control" name="code" id="code" pattern="[A-z0-9]+" placeholder="课程编号" required>
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
			                <div class="form-group">
			                	<label>是否推荐</label>
			                	<input type="radio" name="is_recommend" value="1" checked="checked"> 是
			                	<input type="radio" name="is_recommend" value="0"> 否
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
			                			<td width="100"><input type="checkbox" name="category" value="1"> PHP</td>
			                			<td width="100"><input type="checkbox" name="category" value="2"> JAVA</td>
			                			<td width="100"><input type="checkbox" name="category" value="2"> 大数据</td>
			                			<td width="100"><input type="checkbox" name="category" value="2"> Android</td>
			                			<td width="100"><input type="checkbox" name="category" value="2"> IOS</td>
			                			<td width="100"><input type="checkbox" name="category" value="2"> C</td>
			                			<td width="100"><input type="checkbox" name="category" value="2"> C++</td>
			                		</tr>
			                	</table>
			                </div>
			               
			                <div class="form-group">
			                  	<label for="imgpath">课程图片</label>
			                  	<input type="file" id="imgpath" name="imgpath" required>

			                  	<p class="help-block">*注意：图片尺寸214x97</p>
			                </div>

			                <div class="form-group">
			                  	<label for="title">显示顺序(1-9999数字越大，排序越靠前)</label>
			                  	<input type="number" class="form-control" id="title" min="1" max="9999" value="1" required>
			                </div>

			                <div class="form-group">
			                  	<label>课程介绍</label>
			                  	<textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
			                </div>
			                 <div class="form-group">
			                  	<label>课程描述</label>
			                  	<textarea class="form-control" rows="5" placeholder="Enter ..."></textarea>
			                </div>
			                <div class="checkbox">
			                  	<label>
			                    	<input type="checkbox"> 是否邮件通知用户
			                  	</label>
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