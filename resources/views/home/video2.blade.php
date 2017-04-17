<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('vendor/common/bootstrap-3.3.7/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <title>{{$data->title}}</title>
    <style type="text/css">
        @charset "utf-8";
        html,body{
            width: 100%;
            height: 100%;
            /*background: #F2DEDE;*/
        }
        a:hover{
            text-decoration: none;
        }
        #willesPlay{
            /*width: 1000px;
            height: 660px;*/
            /*width: 1024px;
            height: auto;*/
            margin: 0px auto;
            /*box-shadow: 0px 0px 15px #333333;*/
            position: relative;
            background: black;
        }
        /*播放器头部*/
        #willesPlay .playHeader{
            width: 100%;
            height: 48px;
            background: url({{asset('vendor/common/img/playheader.jpg')}}) repeat-x;
            border-radius: 3px 3px 0px 0px;
        }
        #willesPlay .playHeader .videoName{
            font-size: 16px;
            width: 400px;
            height: 48px;
            line-height: 48px;
            text-align: center;
            margin: 0 auto;
            color: #7a7f82;

        }
        #hideDiv{
            overflow-y:auto;
            height: 632px;
            display: none;
            top:0px;
            left: 100%;
            margin-left: -280px;
            width: 20%;
            background: #5E5E5E;
            position: absolute;
            z-index: 101;
            padding: 30px 40px 34px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            -moz-box-shadow: 0 0 10px rgba(0,0,0,.4);
            -webkit-box-shadow: 0 0 10px rgba(0,0,0,.4);
            -box-shadow: 0 0 10px rgba(0,0,0,.4);
        }
        #willesPlay .playContent{
            position: relative;
            height: auto;
            overflow: hidden;
            cursor: pointer;
            width: 80%;
            margin: 0 auto;
        }
        #willesPlay .playContent .turnoff{
            position: absolute;
            z-index: 10;
            right: -40px;
            top: 50%;
            margin-top: -90px;
        }
        #willesPlay .playContent .turnoff li a{
            display: block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            margin-bottom: 20px;
            text-align: center;
            font-size: 20px;
            color: #fff;
            background: rgba(0,0,0,.5);
        }
        #willesPlay .playContent .turnoff li a:hover{
            color: #666;
        }
        #willesPlay .playContent .playTip{
            position: absolute;
            width: 110px;
            height: 110px;
            text-align: center;
            line-height: 100px;
            top: 50%;
            left: 50%;
            margin-left: -55px;
            margin-top: -50px;
            /*background: #FFFFFF;*/
            font-size: 60px;
            border: 5px solid #FFFFFF;
            border-radius: 50%;
            color: #fff;
            cursor: pointer;
        }
        #willesPlay .playControll{
            position: absolute;
            z-index: 2147483650;
            width: 100%;
            height: 48px;
            bottom: -48px;
            background: url({{asset('vendor/common/img/playheader.jpg')}}) repeat-x;
            border-radius: 0px 0px 3px 3px;
            -moz-user-select:none;
            -webkit-user-select:none;
            user-select:none;
        }
        #willesPlay .fullControll{
            background:rgba(0,0,0,.5);
        }
        #willesPlay .fullControll .timebar span{
            color: #FFFFFF;
        }
        #willesPlay .playControll .playPause{
            float: left;
            width: 20px;
            height: 25px;
            background: url({{asset('vendor/common/img/control_01.png')}}) 0px 0px no-repeat;
            margin: 11px 0px 0px 12px;
            cursor: pointer;
        }
        #willesPlay .playControll .playIcon{
            background-position: 0px -32px;
        }
        /*进度条*/
        #willesPlay .playControll .timebar{
            float: left;
            width: calc(94% - 145px);
            line-height: 48px;
            overflow: hidden;
            margin: 0 auto;
            margin: 0px 0px 0px 20px;
        }
        #willesPlay .playControll .timebar .progress{
            float: left;
            width: 80%;
            margin: 19px 5px;
            height: 10px;
            cursor: pointer;
        }
        #willesPlay .playControll .timebar span{
            float: left;
            width: 8%;
            text-align: center;
        }
        #willesPlay .otherControl{
            float: right;
            position: relative;
        }
        /*播放速率调节*/
        #setSpace{
            /*width: 10px;
            font-size: 20px;
            line-height: 46px;
            margin-left: 7px;
            color: #EF6A6C;*/
        }
        #setSpace #space{
            width: 10px;
            font-size: 20px;
            line-height: 46px;
            margin-left: 7px;
            color: #EF6A6C;

            width: 53px;
            appearance:none;
            outline:none;
            -moz-appearance:none;
            -webkit-appearance:none;
            border: none;
            background-color: #E3E3E3;
        }

        #willesPlay .otherControl span{
            display: inline-block;
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 30px;
            vertical-align: middle;
            font-size: 20px;
            margin: 9px  7px;
            /*background: url(../images/control_01.png) no-repeat;*/
            cursor: pointer;
        }
        #willesPlay .otherControl span:nth-child(1){
            font-size: 28px;
            color: #ef6a6c;
        }
        /*#willesPlay .otherControl span:nth-child(2){
            background-position: -171px 0px;
        }*/
        #willesPlay .otherControl span:nth-child(2){
            color: #919597;
        }
        /*音量*/
        #willesPlay .otherControl .volumeBar{
            display: none;
            position: absolute;
            top: -110px;
            left:4px;
            width: 26px;
            height: 100px;
            background:#f1f2f2;
            border-radius: 4px;
            cursor: pointer;
        }
        #willesPlay .otherControl .volumeBar:after{
            content:"";
            display: block;
            position:absolute;
            bottom: -7px;
            left: 5px;
            width: 0;
            height: 0;
            border-left:8px solid transparent;
            border-right: 8px solid transparent;
            border-top: 8px solid #f1f2f2;
        }
        #willesPlay .otherControl .volumeBar .volumewrap{
            background: #a2a7aa;
            width: 8px;
            height: 80px;
            position: absolute;
            bottom: 10px;
            left: 9px;
            border-radius: 4px;
        }

        #willesPlay .otherControl .volumeBar .progress{
            background: none;
        }
        #willesPlay .otherControl .volumeBar .progress-bar{
            position: absolute;
            bottom: 0px;
            left: 0px;
            border-radius: 4px;
        }
        video::-webkit-media-controls-enclosure {
            /*禁用播放器控制栏的样式*/
            display: none !important;
        }
        :-webkit-full-screen{}
    </style>
</head>
<body>
<div class="col-md-12">
    <div id="willesPlay">
        <div class="playContent" id="moveDiv">
            {{--<div class="turnoff">--}}
                {{--<ul>--}}
                    {{--<li style="list-style: none;">--}}
                        {{--<a href="javascript:;" title="目录" id="big-link" class="glyphicon glyphicon-heart-empty"></a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}

            <video width="100%" height="100%" id="playVideo">
                <source src="{{asset('uploads/'.$data->video_path)}}" type="video/mp4"></source>
            </video>
            <div class="playTip glyphicon glyphicon-play"></div>
        </div>
        <div id="hideDiv">
            <h2>大数据基础</h2>
            <ul>
                <a href="#">
                    <li>大数据基础概论11</li>
                </a>
                <a href="#">
                    <li>大数据基础概论22</li>
                </a>

            </ul>

        </div>
        <div class="playControll">
            <div class="playPause playIcon"></div>
            <div class="timebar">
                <span class="currentTime">0:00:00</span>
                <div class="progress">
                    <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                </div>
                <span class="duration">0:00:00</span>
            </div>
            <span id="setSpace">
								<select name="space"  id="space" onchange="setPlaySpeed()">
									<option  value="1.75" >X1.75</option>
									<option  value="1.5">X1.5</option>
									<option  value="1.25">X1.25</option>
									<option  value="1" selected="selected">X1.0</option>
								</select>
							</span>
            <div class="otherControl">
                <span class="volume glyphicon glyphicon-volume-down"></span>
                <span class="fullScreen glyphicon glyphicon-fullscreen"></span>
                <div class="volumeBar">
                    <div class="volumewrap">
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 8px;height: 40%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('vendor/common/bootstrap-3.3.7/dist/js/jquery.min.js')}}"></script>
<script>
    $(function() {
        var playVideo = $('video');
        var playPause = $('.playPause'); //播放和暂停
        var currentTime = $('.timebar .currentTime'); //当前时间
        var duration = $('.timebar .duration'); //总时间
        var progress = $('.timebar .progress-bar'); //进度条
        var volumebar = $('.volumeBar .volumewrap').find('.progress-bar');
        playVideo[0].volume = 0.4; //初始化音量
        playPause.on('click', function() {
            playControl();
        });
        $('.playContent').on('click', function() {
            playControl();
        }).hover(function() {
            $('.turnoff').stop().animate({
                'right': 0
            }, 500);
        }, function() {
            $('.turnoff').stop().animate({
                'right': -40
            }, 500);
        });
        $(document).click(function() {
            $('.volumeBar').hide();
        });
        playVideo.on('loadedmetadata', function() {
            duration.text(formatSeconds(playVideo[0].duration));
        });

        playVideo.on('timeupdate', function() {
            currentTime.text(formatSeconds(playVideo[0].currentTime));
            progress.css('width', 100 * playVideo[0].currentTime / playVideo[0].duration + '%');
        });
        playVideo.on('ended', function() {
            $('.playTip').removeClass('glyphicon-pause').addClass('glyphicon-play').fadeIn();
            playPause.toggleClass('playIcon');
        });

        $(window).keyup(function(event){
            event = event || window.event;
            if(event.keyCode == 32)playControl();
            if(event.keyCode == 27){
                $('.fullScreen').removeClass('cancleScreen');
                $('#willesPlay .playControll').css({
                    'bottom': -48
                }).removeClass('fullControll');
            };
            event.preventDefault();
        });
        //取消右键事件
        $("video").bind("contextmenu",function(){
            return false;
        });
        //全屏
        $('.fullScreen').on('click', function() {
            $('#setSpace').hide();
            if ($(this).hasClass('cancleScreen')) {
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                    $('#setSpace').show();
                } else if (document.mozExitFullScreen) {
                    document.mozExitFullScreen();
                    $('#setSpace').show();
                } else if (document.webkitExitFullscreen) {
                    document.webkitExitFullscreen();
                    $('#setSpace').show();
                }
                $(this).removeClass('cancleScreen');
                $('#willesPlay .playControll').css({
                    'bottom': -48
                }).removeClass('fullControll');
            } else {
                if (playVideo[0].requestFullscreen) {
                    playVideo[0].requestFullscreen();
                } else if (playVideo[0].mozRequestFullScreen) {
                    playVideo[0].mozRequestFullScreen();
                } else if (playVideo[0].webkitRequestFullscreen) {
                    playVideo[0].webkitRequestFullscreen();
                } else if (playVideo[0].msRequestFullscreen) {
                    playVideo[0].msRequestFullscreen();
                }
                $(this).addClass('cancleScreen');
                $('#willesPlay .playControll').css({
                    'left': 0,
                    'bottom': 0
                }).addClass('fullControll');
            }
            return false;
        });
        //音量
        $('.volume').on('click', function(e) {
            e = e || window.event;
            $('.volumeBar').toggle();
            e.stopPropagation();
        });
        $('.volumeBar').on('click mousewheel DOMMouseScroll', function(e) {
            e = e || window.event;
            volumeControl(e);
            e.stopPropagation();
            return false;
        });
        $('.timebar .progress').mousedown(function(e) {
            e = e || window.event;
            updatebar(e.pageX);
        });
        //$('.playContent').on('mousewheel DOMMouseScroll',function(e){
        //	volumeControl(e);
        //});
        var updatebar = function(x) {
            var maxduration = playVideo[0].duration; //Video
            var positions = x - progress.offset().left; //Click pos
            var percentage = 100 * positions / $('.timebar .progress').width();
            //Check within range
            if (percentage > 100) {
                percentage = 100;
            }
            if (percentage < 0) {
                percentage = 0;
            }

            //Update progress bar and video currenttime
            progress.css('width', percentage + '%');
            playVideo[0].currentTime = maxduration * percentage / 100;
        };
        //音量控制
        function volumeControl(e) {
            e = e || window.event;
            var eventype = e.type;
            var delta = (e.originalEvent.wheelDelta && (e.originalEvent.wheelDelta > 0 ? 1 : -1)) || (e.originalEvent.detail && (e.originalEvent.detail > 0 ? -1 : 1));
            var positions = 0;
            var percentage = 0;
            if (eventype == "click") {
                positions = volumebar.offset().top - e.pageY;
                percentage = 100 * (positions + volumebar.height()) / $('.volumeBar .volumewrap').height();
            } else if (eventype == "mousewheel" || eventype == "DOMMouseScroll") {
                percentage = 100 * (volumebar.height() + delta) / $('.volumeBar .volumewrap').height();
            }
            if (percentage < 0) {
                percentage = 0;
                $('.otherControl .volume').attr('class', 'volume glyphicon glyphicon-volume-off');
            }
            if (percentage > 50) {
                $('.otherControl .volume').attr('class', 'volume glyphicon glyphicon-volume-up');
            }
            if (percentage > 0 && percentage <= 50) {
                $('.otherControl .volume').attr('class', 'volume glyphicon glyphicon-volume-down');
            }
            if (percentage >= 100) {
                percentage = 100;
            }
            $('.volumewrap .progress-bar').css('height', percentage + '%');
            playVideo[0].volume = percentage / 100;
            e.stopPropagation();
            e.preventDefault();
        }

        function playControl() {
            playPause.toggleClass('playIcon');
            if (playVideo[0].paused) {
                playVideo[0].play();
                $('.playTip').removeClass('glyphicon-play').addClass('glyphicon-pause').fadeOut();
            } else {
                playVideo[0].pause();
                $('.playTip').removeClass('glyphicon-pause').addClass('glyphicon-play').fadeIn();
            }
        }
        //关灯
        $('.btnLight').click(function(e) {
            e = e || window.event;
            if ($(this).hasClass('on')) {
                $(this).removeClass('on');
                $('body').append('<div class="overlay"></div>');
                $('.overlay').css({
                    'position': 'absolute',
                    'width': 100 + '%',
                    'height': $(document).height(),
                    'background': '#000',
                    'opacity': 1,
                    'top': 0,
                    'left': 0,
                    'z-index': 999
                });
                $('.playContent').css({
                    'z-index': 1000
                });
                $('.playControll').css({
                    'bottom': -48,
                    'z-index': 1000
                });

                $('.playContent').hover(function() {
                    $('.playControll').stop().animate({
                        'height': 48,
                    },500);
                }, function() {
                    setTimeout(function() {
                        $('.playControll').stop().animate({
                            'height': 0,
                        }, 500);
                    }, 2000)
                });
            } else {
                $(this).addClass('on');
                $('.overlay').remove();
                $('.playControll').css({
                    'bottom': 0,
                });
            }
            e.stopPropagation();
            e.preventDefault();
        });
    });
    var vid = document.getElementById("playVideo");
    function setPlaySpeed() {
        var space = document.getElementById("space").value;
        vid.playbackRate = space;
    }



    var num=0;
    $('#big-link').click(function(e){
        if(num++ %2 == 0){
            $("#moveDiv").css("margin","0 0");
            $("#hideDiv").css("display","block");
        }else{
            $("#moveDiv").css("margin","0 auto");
            $("#hideDiv").css("display","none");
        }
        e.preventDefault(); //阻止元素的默认动作（如果存在）
    });

    //秒转时间
    function formatSeconds(value) {
        value = parseInt(value);
        var time;
        if (value > -1) {
            hour = Math.floor(value / 3600);
            min = Math.floor(value / 60) % 60;
            sec = value % 60;
            day = parseInt(hour / 24);
            if (day > 0) {
                hour = hour - 24 * day;
                time = day + "day " + hour + ":";
            } else time = hour + ":";
            if (min < 10) {
                time += "0";
            }
            time += min + ":";
            if (sec < 10) {
                time += "0";
            }
            time += sec;
        }
        return time;
    }
</script>
</body>
</html>