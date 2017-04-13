@extends('layouts.master')

@section('title')
    在线学习平台
@endsection

@section('style')
    <style type="text/css">
        .class-top {
            width: 100%;
            height: 150px;
            background-color: green;
            margin-top: -20px;
            margin-bottom: 20px;
        }

        .class-left {
            width: 20%;
            /*background-color:gray;*/
            float: left;
        }

        .class-join {
            margin-top: 10px;
            height: 40px;
            background: red;
            font-size: 14px;
            font-weight: 500;
            line-height: 40px;
            text-align: center;
            color: #fff;
            cursor: pointer;
        }

        .class-right {
            width: 900px;
            /*background-color:blue;*/
            float: right;
        }

        .class-left-title {
            margin-top: 50px;
            font-weight: 600;
            font-size: 18px;
            border-bottom: 1px solid gainsboro;
        }

        .class-left-con {
            margin: 20px 0;
        }

        .class-right-top {
            height: 100px;
            margin-bottom: 30px;
            /*background-color: green;*/
            border-bottom: 1px solid gainsboro;
        }

        .class-title {
            font-size: 28px;
            font-weight: 700;
            height: 40px;
            margin: 10px 0;
        }

        .career-child{
            margin: 20px 0;
            border-bottom: 1px solid gainsboro;
        }
        .carrer-title{
            font-weight: 600;
            font-size: 16px;
            color: green;
            /*padding:5px 0;*/
        }
        .carrer-intro{
            padding:10px 0;
        }
        .class-info span {
            margin-right: 20px;
        }
        .lession-list{
            margin:0;
        }
        .lession-list .lession-info{
            height:160px;
            width: 300px;

            padding: 0 10px 0 0;
            background-color: #001f3f;
        }
    </style>
@endsection

@section('content')
    {{--<div class="class-top">--}}
    {{--</div>--}}
    <div class="container">
        <div class="class-left">
            <img src="http://img.mukewang.com/58341c260001afb506000338-240-180.jpg" alt="" width="100%">
            <div class="class-join">参加该路径</div>
            <div class="class-left-title">路径介绍</div>
            <div class="class-left-con">
                <span style="font-size: 13px;color: gray;">Laravel大量使用了PHP的面向对象编程的知识和新特性，我们可以通过这一系列的视频来理解PHP的OOP，从而达到更好地理解和使用Laravel的目的Laravel大量使用了PHP的面向对象编程的知识和新特性，我们可以通过这一系列的视频来理解PHP的OOP，从而达到更好地理解和使用Laravel的目的</span>
            </div>
        </div>
        <div class="class-right">
            <div class="class-right-top">
                <div class="class-title">带你走进大数据</div>
                <div class="class-info">
                    <span>5门课程</span>
                    <span>3640人在学</span>
                </div>
            </div>
            <div class="class-right-body">
                <div class="career-child">
                    <div class="carrer-title">初探YII框架</div>
                    <div class="carrer-intro">我们从YII的安装开始，学习YII的基本使用，带你初探YII的全貌。</div>
                    <div class="lession-list row hidden">
                        <div class="lession-info col-md-3">
                            <img src="{{asset('vendor/common/img/1.jpg')}}" alt="" width="100%">
                            <div>
                                <span></span>
                            </div>
                        </div>
                        <div class="lession-info col-md-3">
                            <img src="{{asset('vendor/common/img/1.jpg')}}" alt="" width="100%">
                        </div>
                        <div class="lession-info col-md-3">
                            <img src="{{asset('vendor/common/img/1.jpg')}}" alt="" width="100%">
                        </div>
                    </div>
                </div>

                <div class="career-child">
                    <div class="carrer-title">初探YII框架</div>
                    <div class="carrer-intro">我们从YII的安装开始，学习YII的基本使用，带你初探YII的全貌。</div>
                    <div class="lession-list row hidden">
                        <div class="lession-info col-md-3">
                            <img src="{{asset('vendor/common/img/1.jpg')}}" alt="" width="100%">

                        </div>
                        <div class="lession-info col-md-3">
                            <img src="{{asset('vendor/common/img/1.jpg')}}" alt="" width="100%">

                        </div>

                        <div class="lession-info col-md-3">
                            <img src="{{asset('vendor/common/img/1.jpg')}}" alt="" width="100%">
                        </div>
                        <div class="lession-info col-md-3">
                            <img src="{{asset('vendor/common/img/1.jpg')}}" alt="" width="100%">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(".carrer-title").click(function () {
            var list = $(this).parent().children('.lession-list');
            var height = list.height();
            console.log(height);
            if(!height){
                list.addClass('show').removeClass('hidden');
            }else{
                list.addClass('hidden').removeClass('show');
            }
        });
    </script>
@endsection