@extends('layouts.master')

@section('title')
    在线学习平台
@endsection

@section('style')
    <style type="text/css">
    	.course-head{
    		height: 160px;
    		/*background-color: #ccc;*/
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
    		background-color: #fff;
    		float:left;
    	}
    	.course-body-right{
    		width:340px;
    		height:500px;
    		/*background-color: #ccc;*/
    		float:right;
			padding:10px;
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
    		background-color: #eee;
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
		.course-top{
			background-color: seagreen;
			margin-top:-20px;
		}
		.course-attr span,.course-attr i{
			color: #fff;
		}
		.right-top{
			margin-bottom: 10px;
		}
		.right-top span{
			font-size: 16px;
			font-weight: 600;
			color:#000000;
		}
    </style>
@endsection

@section('content')
	<div class="course-top">
		<div class="container">
			<div class="course-head">
				<h1>{{$data->title}}</h1>
				<div class="course-head-content">
					<div class="course-attr" style="background-color: #f00;border-radius: 5px;width:160px;">
						<a href="javascript:void(0);" class="learn-start">开始学习</a>
						<a href="javascript:void(0);" class="glyphicon glyphicon-heart learn-collect"></a>
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
		</div>
	</div>
    <div class="container">

    	<div class="course-body">
    		<div class="course-body-left">
    			<div class="course-body-one">
	    			<p>{{$data->description}}</p>

	    			<span id="chapter">章节</span>
	    			<span id="comment">评论</span>
	    		</div>
	    		<div class="course-body-two">
	    			@foreach($courseware as $key=>$ware)
                        <a href="{{route('video',['id'=>$ware->id])}}" target="_blank" >
                            <span>
                                第{{$key+1}}课 {{$ware->title}}
                            </span>
                            <span class="glyphicon glyphicon-play-circle"></span>
                            <span> {{$ware->minutes}}分钟</span>
							@if($ware->is_charge==1)
								<span style="color:red;">收费</span>
							@elseif($ware->is_charge==2)
							<span style="color:green;">免费</span>
							@endif
                        </a>
                    @endforeach
	    		</div>
	    		<div class="course-body-three">
    				<form class="form">
    					<div class="form-group">
    						<textarea class="form-control comment-text" rows="5" placeholder="扯淡、吐槽、表扬、鼓励......想说啥就说啥！"></textarea>
    					</div>
						<div class="form-group">
						    <div class="col-sm-offset-10 col-sm-2">
						     	<button type="button" class="btn btn-primary comment">发表评论</button>
						    </div>
					  	</div>
    				</form>
	    			<ul class="uuu">
						@foreach($comments as $comment)
                        <li>
                            <div>
                                <p>{{$comment->comment}}</p>
                                <p>时间：{{$comment->created_at}} {{$comment->realname}}</p>
                            </div>
                        </li>
                         @endforeach
                    </ul>
	    		</div>
    		</div>
    		<div class="course-body-right">
				<div class="right-top">
					{{--<span class="label label-default">讲师提示</span>--}}
					<button class="btn btn-default">讲师提示</button>
					<kbd>讲师：{{$data->realname}}</kbd>
				</div>
				<div class="well">
					<span>小伙伴们，欢迎学习本课程，学习过程中如有任务问题，请在课程下方留言，也欢迎给予评论与建议！</span>
				</div>
				<div class="well">
					<span>老师告诉你能学到什么？<br>
1、掌握条件判断和流程控制的基本语句<br>
2、通过大量案例的学习，掌握shell编程思想<br>
3、体会shell编程在Linux运维中的重要作用</span>
				</div>
				<div class="alert alert-success alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<strong>Well done!</strong> Believe in yourself, you can finish this course .
				</div>
    		</div>
    	</div>
    	<div class="course-foot">

    	</div>
    </div>
@endsection
@section('script')
	<script>
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
		$('.comment').click(function(){
            var uuu = $('.uuu');
            var area = $('.comment-text');
            var text = area.val().trim();
            if(text==''){
				return false;
			}
			var user_id = {{Auth::check()?Auth::user()->id:0}};
			if(user_id==0){
			    alert('请登录后再评论！');
			    return false;
			}
			var course_id = {{$data->id}};
            $.ajax({
                type:"post",
                url:"{{route('ajax_comment')}}",
                data:"text="+text+"&user_id="+user_id+"&course_id="+course_id,
                success:function(data){
                    if(data.msg.code==1){
						uuu.prepend(data.msg.comment);
						area.val('');
                    }else if(data.msg.code==0){

                    }
                }
            });
		});
		$('.learn-collect').click(function () {
			alert('此功能正在开发中');
        });
	</script>
@endsection

