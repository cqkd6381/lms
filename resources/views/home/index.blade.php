@extends('layouts.master')

@section('title')
    在线学习平台
@endsection
<!--  -->
@section('style')
    <style type="text/css">
    	.box{
    		width:290px;
    		height:190px;
    		background-color: gray;
    		float:left;
    		margin:5px;
    		/*padding:5px;*/
    		border-radius:0px;
    	}
    	.box .box-head{
    		height:30px;width:290px;
    		background-color: seagreen;
    	}
    	.box .box-head span{
    		text-align: center;
    		font-size: 14px;
    		line-height: 30px;
    		padding:5px;
    		color:#fff;
    	}
    	.box .box-body{
    		height:130px;width:290px;
    		/*background-color: #bbb;*/
    		/*padding:5px 10px;*/
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
    		background-color: seagreen;
    		/*border-bottom-left-radius:5px;*/
    		/*border-bottom-right-radius:5px;*/
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
        #carousel-example-generic{
            margin-bottom: 20px;
        }
    </style>
@endsection

@section('content')
    <div class="container clearfix">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="http://img.mukewang.com/58ee02c20001526b12000460.jpg" height="500px" alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="item">
                    <img src="http://img.mukewang.com/58e623d80001b46312000460.jpg" height="500px" alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="item">
                    <img src="http://img.mukewang.com/58df260100018afb12000460.jpg" height="500px" alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="item">
                    <img src="http://img.mukewang.com/58df20d70001e95b12000460.jpg" height="500px" alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="item">
                    <img src="http://img.mukewang.com/58d369440001d78812000460.jpg" height="500px" alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    	<div class="filter">
    		<a href="{{route('index',['type'=>1])}}">推荐</a>
    		<a href="{{route('index',['type'=>2])}}">最新</a>
    		<a href="{{route('index',['type'=>3])}}">最热</a>
    		<a href=""><span class="glyphicon glyphicon-circle-arrow-right"></span></a>
    		<a href=""><span class="glyphicon glyphicon-circle-arrow-left"></span></a>
    		{{--<span>1/28</span>--}}
    	</div>
    	@foreach($datas as $data)
			<a href="{{route('course',['id'=>$data->id])}}">
				<div class="box">
					<div class="box-head">
						<span>{{$data->title}}</span>
					</div>
					<div class="box-body">
						{{--<span>{{$data->title}}</span>--}}
{{--						<p>{{$data->introduction}}</p>--}}
						<img src="uploads/{{$data->imgpath}}" width="290px" height="130px" alt="">
					</div>
					<div class="box-foot">
						<span>{{$data->name}}</span>
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