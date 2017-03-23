@extends('layouts.master')

@section('title')
    在线学习平台
@endsection
<!--  -->
@section('style')
    <style type="text/css">
    	.box{
    		width:390px;
    		height:160px;
    		background-color: gray;
    		float:left;
    		margin:5px;
    		padding:5px;
    		text-align: center;
    		box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.5);

    	}
    	.box h1{
    		line-height: 120px;
    		color:white;
    	}
    	section a{

    	}
    </style>
@endsection

@section('content')
    <div class="container">
    	<section>
    		<a href="{{route('class',['id'=>1])}}">
    			<div class="box">
    				<h1>大数据工程师</h1>
    			</div>
    		</a>
    	</section>
    	<section>
    		<a href="{{route('class',['id'=>2])}}">
    			<div class="box">
    				<h1>前端工程师</h1>
    			</div>
    		</a>
    	</section>
    	<section>
    		<a href="{{route('class',['id'=>3])}}">
    			<div class="box">
    				<h1>PHP工程师</h1>
    			</div>
    		</a>
    	</section>
    	<section>
    		<a href="{{route('class',['id'=>4])}}">
    			<div class="box">
    				<h1>JAVA工程师</h1>
    			</div>
    		</a>
    	</section>
    	<section>
    		<a href="{{route('class',['id'=>5])}}">
    			<div class="box">
    				<h1>LINUX工程师</h1>
    			</div>
    		</a>
    	</section>
    	
    </div>
@endsection

@section('script')
	<script type="text/javascript">
		$('.box').mouseover(function(e){
			$(this).css('box-shadow','0 5px 10px 0 rgba(0, 0, 0, 1)');
		});
		$('.box').mouseleave(function(e){
			$(this).css('box-shadow','0 5px 10px 0 rgba(0, 0, 0, 0.3)');
		});
	</script>
@endsection