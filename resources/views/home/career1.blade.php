@extends('layouts.master')

@section('title')
    在线学习平台
@endsection
<!--  -->
@section('style')
    <style type="text/css">
    	.box{
    		/*width:390px;*/
    		width:290px;
    		height:160px;
    		background-color: darkolivegreen;
    		float:left;
    		margin:5px;
    		padding:5px;
    		text-align: center;
    		/*box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.5);*/
			position: relative;

    	}
    	.box-in h2{
			line-height: 110px;
			color:white;
		}
		.box-bottom{
			position: absolute;
			left:20px;
			bottom: 10px;
			color:white;
		}
		.box-bottom span{
			text-align: center;
		}
		.box-out{
			width: 290px;
			height: 160px;
			background-color: seagreen;
			float:left;
			margin:5px;
			padding:5px;
			position: absolute;
			opacity: 0.9;
			top:-5px;
			left:-5px;
		}
		.box-out p{
			text-align: center;
			line-height: 20px;
			padding-top: 20px;
			padding-bottom: 20px;
			color:white;
		}
    </style>
@endsection

@section('content')
    <div class="container">
        @foreach($datas as $data)
        	<section>
        		<a href="{{route('class',['id'=>$data->id])}}" >
        			<div class="box">
        				<div class="box-in">
							<h2>{{$data->name}}</h2>
							<div class="box-bottom">
								<span>{{$data->learning_nums}}人在学</span>
							</div>
						</div>
						<div class="box-out hidden">
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;简介：快速开发的最佳实践之一，丰富的扩展资源，快速开发的思想，越来越受到企业的青睐，应用也愈加广泛。本课程以博客系统为例</p>
						</div>
					</div>
        		</a>
        	</section>
    	@endforeach
    </div>
@endsection

@section('script')
	<script type="text/javascript">
		$('.box').mouseover(function(e){
			$(this).css('box-shadow','0 5px 10px 0 rgba(0, 0, 0, 1)');
		}).mouseleave(function(e){
            $(this).css('box-shadow','0 5px 10px 0 rgba(0, 0, 0, 0.3)');
        });
		$('.box').mouseover(function () {
			$(this).children('.box-out').removeClass('hidden');
        }).mouseleave(function(){
            $(this).children('.box-out').addClass('hidden');
        });
	</script>
@endsection