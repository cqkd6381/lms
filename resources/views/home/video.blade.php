@extends('layouts.master')

@section('title')
    在线学习平台
@endsection

@section('style')
	<style type="text/css">
		#layer-fa
		{
			position: relative;
		}
		#layer{
			position: absolute;
			float；left;
			top:0px;
			color:#f00;
			width: 200px;
			height: 50px;
			text-align: left;
			z-index: 100;
		}
		body{
			background-color: #fff;
		}
	</style>
@endsection

@section('content')
	<div class="container">
		<div style="width:100%;text-align: center;" id="layer-fa">
			<video id="myvideo" controls="controls" width="100%" preload="metadata" autoplay="autoplay">
				<source src="http://class.ibestservice.com/lms_data/lms/storage/media/fms/7f4d1d68a7b010016688b7f2f28acec2.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video>
			<div id="layer">
				姓名：这个是遮罩层
			</div>
		</div>
		<div>
			<button onclick="playbackRate()">playbackRate</button>
			<button onclick="defaultPlaybackRate()">defaultPlaybackRate</button>
			<button onclick="buffered()">buffered</button>
			<button onclick="currentTime()">currentTime</button>
			<button onclick="duration()">duration</button>
			<button onclick="ended()">ended</button>
			<button onclick="test()">test</button>
		</div>
		<div id="span1"></div>
		<div id="span2">[data……]</div>
	</div>
@endsection

@section('script')
	<script type="text/javascript">
		var x = document.getElementById("myvideo");
		var span2 = document.getElementById("span2");
		function playbackRate(){
			x.playbackRate=2;
			var x1 = x.playbackRate;
			span2.innerHTML='[播放速度：'+x1+']';
		}
		function defaultPlaybackRate(){
			var x2 = x.defaultPlaybackRate;
			x.playbackRate = x.defaultPlaybackRate;
			span2.innerHTML='[默认播放速度：'+x2+']';
		}
		function buffered(){
			var x3 = x.buffered;
			span2.innerHTML='['+x3+']';
		}
		function currentTime(){
			var x4 = x.currentTime;
			span2.innerHTML='[当前进度时长：'+x4+']';
		}
		function duration(){
			var x5 = x.duration;
			span2.innerHTML='[总时长：'+x5+']';
		}
		function ended(){
			var x6 = x.ended;
			span2.innerHTML='[是否结束：'+x6+']';
		}
		function test(){
			var x7 = x.pause();
			span2.innerHTML='[暂停]';
		}
		x.onseeking = function(){
			document.getElementById("span1").innerHTML=("Seeking: " + x.seeking + ",已切换到：" + x.currentTime + "s");
		}
		x.onclick = function(){
			if(x.paused){
				x.play();
				span2.innerHTML='[播放中]';
			}else{
				x.pause();
				span2.innerHTML='[已暂停]';
			}
		}
		window.onload = function(){
	        var index = 0;
	        var video = document.getElementById("myvideo");
	        video.onended = function(){
	            if(index){
	                index = 0;
	                video.src="linux4.mp4";
	            }else{
	                index = 1;
	                video.src="linux5.mp4";
	            }        
	        };
		}
		// console.log(width);
	</script>
@endsection