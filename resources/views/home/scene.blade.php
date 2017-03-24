@extends('layouts.master')

@section('title')
    在线学习平台
@endsection
<!--  -->
@section('style')
    <style type="text/css">
    	.box{
    		width:290px;
    		height:160px;
    		background-color: gray;
    		float:left;
    		margin:5px;
    		/*padding:5px;*/
    		border-radius:5px;
    	}
    	.box .box-head{
    		height:30px;width:290px;
    		background-color: #999;
    		border-top-left-radius:5px;
    		border-top-right-radius:5px;
    	}
    	.box .box-head span{
    		text-align: center;
    		font-size: 14px;
    		line-height: 30px;
    		padding:5px;
    		color:#fff;
    	}
    	.box .box-body{
    		height:100px;width:290px;
    		background-color: #bbb;
    		padding:5px 10px;
    	}
    	.box .box-body span{
    		color:#fff;
    		height:25px;width:270px;
    		font-size: 16px;
    		padding-bottom: 5px;
    		overflow: hidden;
    		display: inline-block;
    	}
    	.box .box-body p{
    		color:#93999f;
    		height:75px;width:270px;
    		font-size: 13px;
    		overflow: hidden;
    	}
    	.box .box-foot{
    		height:30px;width:290px;
    		background-color: #bbb;
    		border-bottom-left-radius:5px;
    		border-bottom-right-radius:5px;
    	}
    	.box .box-foot span{
    		text-align: center;
    		font-size: 12px;
    		line-height: 30px;
    		padding:5px;
    		color:#fff;
    	}
    	.filter
    	{
    		/*border-bottom: 1px solid #aaa;*/
    		padding:0 6px;
    		height:30px;
    	}
    	.filter a{
    		font-size:16px;
    		padding-right: 10px;
    		color:#787d82;
    	}
    </style>
@endsection

@section('content')
    <div class="container">
    	<div class="filter">
    		<a href="">推荐</a>
    		<a href="">最新</a>
    		<a href="">最热</a>
    	</div>

		<a href="{{route('course',['id'=>1])}}">
			<div class="box">
				<div class="box-head">
					<span>大数据</span>
				</div>
				<div class="box-body">
					<span>Yii框架不得不说的故事—基础篇</span>
					<p>YII是目前比较火的框架，框架里面使用了最新的技术和设计，可以说学习了使用了最新的技术和设计</p>
				</div>
				<div class="box-foot">
					<span>中级</span>
					<span>3666人在学</span>
					<span>廖雪峰</span>
				</div>
			</div>
		</a>
		<a href="{{route('course',['id'=>1])}}" target="_blank">
			<div class="box">
				<div class="box-head">
					<span>大数据</span>
				</div>
				<div class="box-body">
					<span>Yii框架不得不说的故事—基础篇</span>
					<p>YII是目前比较火的框架，框架里面使用了最新的技术和设计，可以说学习了使用了最新的技术和设计</p>
				</div>
				<div class="box-foot">
					<span>中级</span>
					<span>3666人在学</span>
					<span>廖雪峰</span>
				</div>
			</div>
		</a>
		<a href="{{route('course',['id'=>1])}}">
			<div class="box">
				<div class="box-head">
					<span>大数据</span>
				</div>
				<div class="box-body">
					<span>Yii框架不得不说的故事—基础篇</span>
					<p>YII是目前比较火的框架，框架里面使用了最新的技术和设计，可以说学习了使用了最新的技术和设计</p>
				</div>
				<div class="box-foot">
					<span>中级</span>
					<span>3666人在学</span>
					<span>廖雪峰</span>
				</div>
			</div>
		</a>
		<a href="{{route('course',['id'=>1])}}">
			<div class="box">
				<div class="box-head">
					<span>大数据</span>
				</div>
				<div class="box-body">
					<span>Yii框架不得不说的故事—基础篇</span>
					<p>YII是目前比较火的框架，框架里面使用了最新的技术和设计，可以说学习了使用了最新的技术和设计</p>
				</div>
				<div class="box-foot">
					<span>中级</span>
					<span>3666人在学</span>
					<span>廖雪峰</span>
				</div>
			</div>
		</a>
		<a href="{{route('course',['id'=>1])}}">
			<div class="box">
				<div class="box-head">
					<span>大数据</span>
				</div>
				<div class="box-body">
					<span>Yii框架不得不说的故事—基础篇</span>
					<p>YII是目前比较火的框架，框架里面使用了最新的技术和设计，可以说学习了使用了最新的技术和设计</p>
				</div>
				<div class="box-foot">
					<span>中级</span>
					<span>3666人在学</span>
					<span>廖雪峰</span>
				</div>
			</div>
		</a>
		<a href="{{route('course',['id'=>1])}}">
			<div class="box">
				<div class="box-head">
					<span>大数据</span>
				</div>
				<div class="box-body">
					<span>Yii框架不得不说的故事—基础篇</span>
					<p>YII是目前比较火的框架，框架里面使用了最新的技术和设计，可以说学习了使用了最新的技术和设计</p>
				</div>
				<div class="box-foot">
					<span>中级</span>
					<span>3666人在学</span>
					<span>廖雪峰</span>
				</div>
			</div>
		</a>
		<a href="{{route('course',['id'=>1])}}">
			<div class="box">
				<div class="box-head">
					<span>大数据</span>
				</div>
				<div class="box-body">
					<span>Yii框架不得不说的故事—基础篇</span>
					<p>YII是目前比较火的框架，框架里面使用了最新的技术和设计，可以说学习了使用了最新的技术和设计</p>
				</div>
				<div class="box-foot">
					<span>中级</span>
					<span>3666人在学</span>
					<span>廖雪峰</span>
				</div>
			</div>
		</a>
		<a href="{{route('course',['id'=>1])}}">
			<div class="box">
				<div class="box-head">
					<span>大数据</span>
				</div>
				<div class="box-body">
					<span>Yii框架不得不说的故事—基础篇</span>
					<p>YII是目前比较火的框架，框架里面使用了最新的技术和设计，可以说学习了使用了最新的技术和设计</p>
				</div>
				<div class="box-foot">
					<span>中级</span>
					<span>3666人在学</span>
					<span>廖雪峰</span>
				</div>
			</div>
		</a>
		<a href="{{route('course',['id'=>1])}}">
			<div class="box">
				<div class="box-head">
					<span>大数据</span>
				</div>
				<div class="box-body">
					<span>Yii框架不得不说的故事—基础篇</span>
					<p>YII是目前比较火的框架，框架里面使用了最新的技术和设计，可以说学习了使用了最新的技术和设计</p>
				</div>
				<div class="box-foot">
					<span>中级</span>
					<span>3666人在学</span>
					<span>廖雪峰</span>
				</div>
			</div>
		</a>
		<a href="{{route('course',['id'=>1])}}">
			<div class="box">
				<div class="box-head">
					<span>大数据</span>
				</div>
				<div class="box-body">
					<span>Yii框架不得不说的故事—基础篇</span>
					<p>YII是目前比较火的框架，框架里面使用了最新的技术和设计，可以说学习了使用了最新的技术和设计</p>
				</div>
				<div class="box-foot">
					<span>中级</span>
					<span>3666人在学</span>
					<span>廖雪峰</span>
				</div>
			</div>
		</a>
		<a href="{{route('course',['id'=>1])}}">
			<div class="box">
				<div class="box-head">
					<span>大数据</span>
				</div>
				<div class="box-body">
					<span>Yii框架不得不说的故事—基础篇</span>
					<p>YII是目前比较火的框架，框架里面使用了最新的技术和设计，可以说学习了使用了最新的技术和设计</p>
				</div>
				<div class="box-foot">
					<span>中级</span>
					<span>3666人在学</span>
					<span>廖雪峰</span>
				</div>
			</div>
		</a>
		<a href="{{route('course',['id'=>1])}}">
			<div class="box">
				<div class="box-head">
					<span>大数据</span>
				</div>
				<div class="box-body">
					<span>Yii框架不得不说的故事—基础篇</span>
					<p>YII是目前比较火的框架，框架里面使用了最新的技术和设计，可以说学习了使用了最新的技术和设计</p>
				</div>
				<div class="box-foot">
					<span>中级</span>
					<span>3666人在学</span>
					<span>廖雪峰</span>
				</div>
			</div>
		</a>
		<a href="{{route('course',['id'=>1])}}">
			<div class="box">
				<div class="box-head">
					<span>大数据</span>
				</div>
				<div class="box-body">
					<span>Yii框架不得不说的故事—基础篇</span>
					<p>YII是目前比较火的框架，框架里面使用了最新的技术和设计，可以说学习了使用了最新的技术和设计</p>
				</div>
				<div class="box-foot">
					<span>中级</span>
					<span>3666人在学</span>
					<span>廖雪峰</span>
				</div>
			</div>
		</a>

    	
    	
    </div>
@endsection
@section('script')
	<script type="text/javascript">
		$('.box').mouseover(function(e){
			$(this).css('box-shadow','0 5px 10px 0 rgba(0, 0, 0, 0.8)');
		});
		$('.box').mouseleave(function(e){
			$(this).css('box-shadow','0 5px 10px 0 rgba(0, 0, 0, 0)');
		});
	</script>
@endsection