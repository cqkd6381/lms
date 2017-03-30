@extends('layouts.master')

@section('title')
    在线学习平台
@endsection

@section('style')
    <style type="text/css">
    	.course-head{
    		height: 160px;
    		background-color: #ccc;
    		padding:10px; 
    	}
    	.course-head h1{
    		height:40px;
    		color:#fff;
    		font-weight: 700;
    	}
    	.course-head .course-head-content{
    		height: 50px;
    		margin-top: 20px;
    		/*background-color: #999;*/
    	}
    	.course-head .course-head-content .course-attr{
    		height: 50px;
    		/*background-color: #666;*/
    		width:120px;
    		float:left;
    		margin-right: 10px;
    		padding:5px;
    		text-align: center;
    		/*border-right: 1px solid red;*/
    	}
    	.course-attr a{
    		line-height: 40px;
    		font-size: 16px;
    		font-weight: 700;
    		color:#fff;
    		padding-right: 10px;
    	}
    	.course-attr a:hover{
    		color:#000;
    	}
    	.course-attr span{
    		display: block;
    		color:#000;

    	}
    	.course-attr i{
    		display: block;
    		color:#000;
    		font-size: 16px;
    		font-weight: 700;
    	}

    	.course-body{
    		margin-top: 20px;
    	}
    	.course-body-left{
    		width:840px;
    		background-color: #ccc;
    		float:left;
    	}
    	.course-body-right{
    		width:340px;
    		height:500px;
    		background-color: #ccc;
    		float:right;
    	}
    	.course-body-one,.course-body-two{
    		padding:20px 10px;
    		/*margin:10px;*/
    		border-bottom: 1px solid #aaa;
    	}
    	.course-body-one p{
    		line-height: 25px;
    	}
    	.course-body-one span{
    		font-weight: 600;
    		font-size: 18px;
    		color:#555;
    		margin-right: 15px;
    		cursor: pointer;
    	}
    	.course-body-two a{
    		display: block;
    		height:40px;
    		width:820px;
    		background-color: #fff;
    		color:#000;
    		/*margin-top: 10px;*/
    		margin:10px auto;
    	}
    	.course-body-two a:hover{
    		background-color: #555;
    		color:#fff;

    	}
    	.course-body-two a span{
    		line-height: 40px;
    		font-size: 16px;
    		padding: 0 20px;
    		height:40px;
    		display: inline-block;
    	}
    	.course-body-two a span:nth-child(1){
    		width:600px;
    		float: left;
    		overflow: hidden;
    	}
        .course-body-two a span:nth-child(2){
            float: right;
        }
    	.course-body-two a span:nth-child(3){
    		float: right;
    	}
    	.course-body-two a span:nth-child(4){
    		float: right;
    	}
    	.course-body-three form{
            height:190px;
    		/*padding: 20px 20px 50px 20px;*/
            padding: 20px;
    		border-bottom: 1px solid #aaa;
    	}
         .course-body-three ul{
            padding: 20px;
         }
        .course-body-three ul li{
            padding: 10px;
            border-bottom: 1px solid #aaa;
        }
    </style>
@endsection

@section('script')
	<script type="text/javascript">
		$('.course-body-three').hide();
		$(function(){
			$('#chapter').click(function(){
				$('.course-body-two').show();
				$('.course-body-three').hide();
			});
			$('#comment').click(function(){
				$('.course-body-two').hide();
				$('.course-body-three').show();
			});
		});
	</script>
@endsection

@section('content')
    <div class="container">
    	<div class="course-head">
    		<h1>{{$data->title}}</h1>
    		<div class="course-head-content">
    			<div class="course-attr" style="background-color: #f00;border-radius: 5px;width:160px;">
    				<a href="">开始学习</a>
    				<a href="" class="glyphicon glyphicon-heart-empty"></a>
    			</div>
    			<div class="course-attr">
    				<span>学习人数</span>
    				<i>{{$count}}</i>
    			</div>
    			<div class="course-attr">
    				<span>难度级别</span>
    				<i>{{$data->difficulty}}</i>
    			</div>
    			<div class="course-attr">
    				<span>课程时长</span>
    				<i>{{($data->minutes)}}分钟</i>
    			</div>
    		</div>
    	</div>
    	<div class="course-body">
    		<div class="course-body-left">
    			<div class="course-body-one">
	    			<p>{{$data->description}}</p>

	    			<span id="chapter">章节</span>
	    			<span id="comment">评论</span>
	    		</div>
	    		<div class="course-body-two">
	    			@foreach($courseware as $key=>$ware)
                        <a href="{{route('video',['id'=>$ware->id])}}" target="_blank">
                            <span>
                                第{{$key+1}}课 {{$ware->title}}
                            </span>
                            <span class="glyphicon glyphicon-ok-sign"></span>
                            <span> {{$ware->minutes}}分钟</span>
                            <span style="color:green;">
                                @if($key==0)
                                免费
                                @endif
                            </span>
                        </a>
                    @endforeach
	    		</div>
	    		<div class="course-body-three">
    				<form class="form">
    					<div class="form-group">
    						<textarea class="form-control" rows="5" placeholder="扯淡、吐槽、表扬、鼓励......想说啥就说啥！"></textarea>
    					</div>
						<div class="form-group">
						    <div class="col-sm-offset-10 col-sm-2">
						     	<button type="submit" class="btn btn-primary">发表评论</button>
						    </div>
					  	</div>
    				</form>
	    			<ul>
                        <li>
                            <div>
                                <p>还有没有在学的啊。学的右下角点个赞</p>
                                <p>时间：2016-04-11 廖雪峰</p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <p>还有没有在学的啊。学的右下角点个赞</p>
                                <p>时间：2016-04-11 廖雪峰</p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <p>还有没有在学的啊。学的右下角点个赞</p>
                                <p>时间：2016-04-11 廖雪峰</p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <p>还有没有在学的啊。学的右下角点个赞</p>
                                <p>时间：2016-04-11 廖雪峰</p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <p>还有没有在学的啊。学的右下角点个赞</p>
                                <p>时间：2016-04-11 廖雪峰</p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <p>还有没有在学的啊。学的右下角点个赞</p>
                                <p>时间：2016-04-11 廖雪峰</p>
                            </div>
                        </li>            
                    </ul>
	    		</div>
    		</div>
    		<div class="course-body-right">
    			
    		</div>
    	</div>
    	<div class="course-foot">
    		
    	</div>
    </div>
@endsection

