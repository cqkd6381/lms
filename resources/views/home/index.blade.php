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
    		text-decoration-line: none; 
    		line-height: 30px;
    	}
    	.filter span{
    		font-size:16px;
    		color:#787d82;
    		text-decoration-line: none;
    		float:right;
    		display: inline-block;
    		line-height: 30px;
    		padding-left: 10px;
    	}
    </style>
@endsection

@section('content')
    <div class="container clearfix">
    	<div class="filter">
    		<a href="{{route('index',['type'=>1])}}">推荐</a>
    		<a href="{{route('index',['type'=>2])}}">最新</a>
    		<a href="{{route('index',['type'=>3])}}">最热</a>
    		<a href=""><span class="glyphicon glyphicon-circle-arrow-right"></span></a>
    		<a href=""><span class="glyphicon glyphicon-circle-arrow-left"></span></a>
    		<span>1/28</span>
    	</div>
    	@foreach($datas as $data)
			<a href="{{route('course',['id'=>$data->id])}}">
				<div class="box">
					<div class="box-head">
						<span>{{$data->name}}</span>
					</div>
					<div class="box-body">
						<span>{{$data->title}}</span>
						<p>{{$data->introduction}}</p>
					</div>
					<div class="box-foot">
						<span>{{$data->difficulty}}</span>
						<span>{{$data->learning_nums}}人在学</span>
						<span>{{$data->realname}}</span>
					</div>
				</div>
			</a>
		@endforeach
		<div class="clearfix"></div>
    	<div class="text-right">
			{!! $datas->render() !!}
		</div>
    </div>
@endsection
@section('script')
	<script type="text/javascript">
		$(function(){
            $('.box').mouseover(function(e){
                $(this).css('box-shadow','0 5px 10px 0 rgba(0, 0, 0, 0.8)');
            });
            $('.box').mouseleave(function(e){
                $(this).css('box-shadow','0 5px 10px 0 rgba(0, 0, 0, 0)');
            });
            
        });
	</script>
@endsection