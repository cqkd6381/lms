@extends('layouts.master')

@section('title')
    在线学习平台
@endsection

@section('style')
    <style type="text/css">
    	.class-head{
    		height:160px;
    		background-color: gray;
    		margin:20px 0px;
    	}
    	.class-head h1{
    		line-height: 160px;
    		text-align: center;
    		font-size: 50px;
    		font-weight: 700;
    		color: #fff;
    	}
    	.class-body ul{
    		padding: 20px;
    		height: 200px;
    		background-color: #fff;
    	}
    	.class-body ul li{
    		height: 140px;
    		/*padding: 10px;*/
    		background-color: #eee;
    		display: block;
    		box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3);
    		border-radius: 5px;
    		margin-top: 20px;
    	}
    	.class-list-left{
    		height:140px;
    		width:20%;
    		padding: 21px 10px;
    		/*background-color: blue;*/
    		float: left;
    	}
    	.class-list-right{
    		height:140px;
    		width:80%;
    		padding: 21px 10px;
    		/*background-color: green;*/
    		float: right;
    	}
    	.class-list-right h3{
    		height: 38px;
    		margin:0;

    	}
    	.class-list-right h3 a{
    		color:#567;
    		font-size: 16px;
    		font-weight: 600;
    	}
    	.class-list-right h3 a:hover{
    		color:#088;
    	}
    	.class-list-right h3 a:nth-child(1){
    		font-size: 25px;
    		color: #222;
    	}
    	.class-list-right p{
    		height: 60px;
    		margin:0;
    		overflow: hidden;
    	}
    </style>
@endsection

@section('content')
    <div class="container">
    	<div class="class-head">
    		<h1>{{$career_name}}</h1>
    	</div>
    	<div class="class-body">
    		<ul>
                @foreach($datas as $data)
        			<li>
        				<div class="class-list-left">
        					<a href="{{route('course',['id'=>$data->id])}}"><img height="97" src="{{asset('vendor/common/img/1.jpg')}}"></a>
        				</div>
        				<div class="class-list-right">
        					<h3>
        						<a href="{{route('course',['id'=>$data->id])}}">{{$data->title}}</a>
        						<a>{{$data->courseware_nums}}个视频</a>
        						<a>{{$data->minutes}}分钟</a>
        					</h3>
        					<p>{{$data->introduction}}</p>
        				</div>
        			</li>
                @endforeach
    			<li>
    				<div class="class-list-left">
    					<a href="{{route('course',['id'=>1])}}"><img height="97" src="{{asset('vendor/common/img/1.jpg')}}"></a>
    				</div>
    				<div class="class-list-right">
    					<h3>
    						<a href="{{route('course',['id'=>1])}}">PHP 面向对象编程</a>
    						<a>11个视频</a>
    						<a>总时长89分钟</a>
    					</h3>
    					<p>Laravel大量使用了PHP的面向对象编程的知识和新特性，我们可以通过这一系列的视频来理解PHP的OOP，从而达到更好地理解和使用Laravel的目的Laravel大量使用了PHP的面向对象编程的知识和新特性，我们可以通过这一系列的视频来理解PHP的OOP，从而达到更好地理解和使用Laravel的目的</p>
    				</div>
    			</li>
    			<li>
    				<div class="class-list-left">
    					<a href="{{route('course',['id'=>1])}}"><img height="97" src="{{asset('vendor/common/img/1.jpg')}}"></a>
    				</div>
    				<div class="class-list-right">
    					<h3>
    						<a href="{{route('course',['id'=>1])}}">PHP 面向对象编程</a>
    						<a>11个视频</a>
    						<a>总时长89分钟</a>
    					</h3>
    					<p>Laravel大量使用了PHP的面向对象编程的知识和新特性，我们可以通过这一系列的视频来理解PHP的OOP，从而达到更好地理解和使用Laravel的目的Laravel大量使用了PHP的面向对象编程的知识和新特性，我们可以通过这一系列的视频来理解PHP的OOP，从而达到更好地理解和使用Laravel的目的</p>
    				</div>
    			</li>
    			<li>
    				<div class="class-list-left">
    					<a href="{{route('course',['id'=>1])}}"><img height="97" src="{{asset('vendor/common/img/1.jpg')}}"></a>
    				</div>
    				<div class="class-list-right">
    					<h3>
    						<a href="{{route('course',['id'=>1])}}">PHP 面向对象编程</a>
    						<a>11个视频</a>
    						<a>总时长89分钟</a>
    					</h3>
    					<p>Laravel大量使用了PHP的面向对象编程的知识和新特性，我们可以通过这一系列的视频来理解PHP的OOP，从而达到更好地理解和使用Laravel的目的Laravel大量使用了PHP的面向对象编程的知识和新特性，我们可以通过这一系列的视频来理解PHP的OOP，从而达到更好地理解和使用Laravel的目的</p>
    				</div>
    			</li>
    			
    			
    		</ul>
    	</div>
    	<div class="class-foot"></div>
    </div>
@endsection

@section('script')
	<script type="text/javascript">
		$('.class-body ul li').mouseover(function(e){
			$(this).css('box-shadow','5px 5px 5px 5px rgba(0, 170, 178, 1)');
		});
		$('.class-body ul li').mouseleave(function(e){
			$(this).css('box-shadow','0 5px 10px 0 rgba(0, 0, 0, 0.3)');
		});
	</script>
@endsection