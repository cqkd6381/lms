<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{asset('vendor/common/css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">
	<link href="{{asset('vendor/common/css/non-responsive.css')}}" rel="stylesheet">
	<script src="{{asset('vendor/common/js/ie-emulation-modes-warning.js')}}"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
      	<div class="container">
	        <div class="navbar-header">
	          	<!-- The mobile navbar-toggle button can be safely removed since you do not need it in a non-responsive implementation -->
	          	<a class="navbar-brand" href="#">百得课堂</a>
	        </div>
	        <!-- Note that the .navbar-collapse and .collapse classes have been removed from the #navbar -->
	        <div id="navbar">
	          	<ul class="nav navbar-nav">
		            <li class="dropdown">
		             	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">课程 <span class="caret"></span></a>
		              	<ul class="dropdown-menu">
		                	<li><a href="#">线上课程</a></li>
		                	<li><a href="#">线下课程</a></li>
		              	</ul>
		            </li>
		            <li><a href="#about">职业路径</a></li>
		            <li><a href="#contact">知识库</a></li>
	          	</ul>
	          	<form class="navbar-form navbar-left">
		            <div class="form-group">
		              	<input type="text" class="form-control" placeholder="课程">
		            </div>
	            	<button type="submit" class="btn btn-default">搜索</button>
	          	</form>
	          	<ul class="nav navbar-nav navbar-right">
		            <li><a href="#">登陆</a></li>
		            <li><a href="#">注册</a></li>
		            <li class="dropdown">
			          	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
			          	<ul class="dropdown-menu">
				            <li><a href="#">Action</a></li>
				            <li><a href="#">Another action</a></li>
				            <li><a href="#">Something else here</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="#">Separated link</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="#">One more separated link</a></li>
			          	</ul>
			        </li>
	          	</ul>
	        </div><!--/.nav-collapse -->
      	</div>
    </nav>
	@section('demo')
    @show

    @yield('content')

    <nav class="navbar navbar-default navbar-fixed-bottom">
      	<div class="container">
	        <div id="navbar">
	          	<ul class="nav navbar-nav">
		            <li><a href="#">@2011 安徽百得思维信息科技有限公司 All Rights Reserved 版权所有 皖ICP备16015303号-1</a></li>
	          	</ul>
	        </div>
      	</div>
    </nav>

	<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdn.bootcss.com/vue/2.2.4/vue.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="{{asset('vendor/common/js/ie10-viewport-bug-workaround.js')}}"></script>
</body>
</html>