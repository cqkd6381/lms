@extends('layouts.master')

@section('title')
    在线学习平台
@endsection

@section('style')
    <style type="text/css">
    	.career-head{
    		height: 160px;
    		background-color: gray;
    		padding:10px; 
    	}
    	.career-head h1{
    		height:40px;
    		color:#fff;
    		font-weight: 700;
    	}
    	.career-head .career-head-content{
    		height: 50px;
    		margin-top: 20px;
    		/*background-color: #999;*/
    	}
    	.career-head .career-head-content .career-attr{
    		height: 50px;
    		/*background-color: #666;*/
    		width:120px;
    		float:left;
    		margin-right: 10px;
    		padding:5px;
    		text-align: center;
    		/*border-right: 1px solid red;*/
    	}
    	.career-attr a{
    		line-height: 40px;
    		font-size: 16px;
    		text-decoration-line: none;
    		font-weight: 700;
    		color:#fff;
    		padding-right: 10px;
    	}
    	.career-attr a:hover{
    		color:#000;
    	}
    	.career-attr span{
    		display: block;
    		color:#CEBFBD;

    	}
    	.career-attr i{
    		display: block;
    		color:#CEBFBD;
    		font-size: 16px;
    		font-weight: 700;
    	}

    	.career-body{
    		margin-top: 20px;
    	}
    	.career-body-left{
    		width:780px;
    		background-color: #ccc;
    		float:left;
    	}
    	.career-body-right{
    		width:400px;
    		height:500px;
    		background-color: #ccc;
    		float:right;
    	}
    	.career-body-one,.career-body-two{
    		padding:20px 10px;
    		/*margin:10px;*/
    		border-bottom: 1px solid #aaa;
    	}
    	.career-body-one p{
    		line-height: 25px;
    	}
    	.career-list{
    		height:40px;
    		width:760px;
    		background-color: #fff;
    		/*margin-top: 10px;*/
    		margin:10px auto;
    	}
    	.career-list:hover{
    		background-color: #aaa;

    	}
    	.career-list span{
    		line-height: 40px;
    		font-size: 16px;
    		padding: 0 20px;
    		color:#000;
    	}

    </style>
@endsection

@section('content')
    <div class="container">
    	<div class="career-head">
    		<h1>shell编程之变量</h1>
    		<div class="career-head-content">
    			<div class="career-attr" style="background-color: #f00;border-radius: 5px;width:160px;">
    				<a href="">开始学习</a>
    				<a href="" class="glyphicon glyphicon-heart-empty"></a>
    			</div>
    			<div class="career-attr">
    				<span>学习人数</span>
    				<i>30012</i>
    			</div>
    			<div class="career-attr">
    				<span>难度级别</span>
    				<i>中级</i>
    			</div>
    			<div class="career-attr">
    				<span>课程时长</span>
    				<i>1小时51分</i>
    			</div>
    		</div>
    	</div>
    	<div class="career-body">
    		<div class="career-body-left">
    			<div class="career-body-one">
	    			<p>简介：本课程是《Linux达人养成计划I》中第九章课程的延续，主要介绍Linux shell编程基础中的变量。包括Bash变量的分类和各变量的详细使用，如：用户自定义变量、环境变量、语系变量、位置参数变量和预定义变量。简介：本课程是《Linux达人养成计划I》中第九章课程的延续，主要介绍Linux shell编程基础中的变量。包括Bash变量的分类和各变量的详细使用，如：用户自定义变量、环境变量、语系变量、位置参数变量和预定义变量。</p>
	    		</div>
	    		<div class="career-body-two">
	    			<a href="">
	    				<div class="career-list">
	    					<span>第1课 Bash变量与变量分类(08:30)</span>
	    					<span class="glyphicon glyphicon-play-circle"></span>
	    				</div>
	    			</a>
	    			<a href="">
	    				<div class="career-list">
	    					<span>第1课 Bash变量与变量分类(08:30)</span>
	    					<span class="glyphicon glyphicon-play-circle"></span>
	    				</div>
	    			</a>
	    			<a href="">
	    				<div class="career-list">
	    					<span>第1课 Bash变量与变量分类(08:30)</span>
	    					<span class="glyphicon glyphicon-play-circle"></span>
	    				</div>
	    			</a>



	    		</div>
    		</div>
    		<div class="career-body-right">
    			
    		</div>
    	</div>
    	<div class="career-foot">
    		
    	</div>
    </div>
@endsection