@extends('layouts.master')

@section('style')
    <style>
        .top {
            height: 150px;
            background-color: rgba(46,139,87,1);
            margin-top: -20px;
            margin-bottom: 100px;
            padding-top: 50px;
        }

        .search-box {
            height: 20px;
            width: 600px;
            margin: 0px 35%;
        }

        .search-input {
            height: 50px;
            width: 520px;
            outline: none;
            border: none;
            padding-left: 20px;
            font-size: 16px;
        }

        .search-button {
            height: 50px;
            width: 80px;
            background-color: #f01414;
            border: none;
            padding: 0;
            margin-left: -6px;
            color: #fff;
            font-size: 16px;
            outline: none;
        }

        .search-button:hover {
            background-color: rgba(197, 33, 33, 0.83);
        }

        .class-body ul li {
            height: 130px;
            /*padding: 10px;*/
            background-color: rgba(46,139,87,0.8);
            display: block;
            border-radius: 5px;
            margin-top: 20px;
        }

        .class-list-left {
            height: 130px;
            width: 290px;
            /*padding: 21px 10px;*/
            /*background-color: blue;*/
            float: left;
        }

        .class-list-right {
            height: 130px;
            width: 850px;
            padding: 21px 10px;
            /*background-color: green;*/
            float: right;
        }

        .class-list-right h3 {
            height: 38px;
            margin: 0;

        }

        .class-list-right h3 a {
            color: #567;
            font-size: 16px;
            font-weight: 600;
        }

        .class-list-right h3 a:hover {
            color: #088;
        }

        .class-list-right h3 a:nth-child(1) {
            font-size: 25px;
            color: #222;
        }

        .class-list-right p {
            height: 60px;
            margin: 0;
            overflow: hidden;
        }
    </style>

@endsection
@section('content')
    <div class="top">
        <div class="search-box">
            <form action="">
                <input class="search-input" type="text" name="words"
                       value="<?php echo isset($_GET['words']) ? $_GET['words'] : '';?>" placeholder="请输入想搜索的课程">
                <button class="search-button">搜索</button>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="class-body">
            <ul>
                @forelse($model as $data)
                    <li>
                        <div class="class-list-left">
                            <a href="{{route('course',['id'=>$data->id])}}">
                                <img height="130px" width="290px" src="{{asset('uploads/'.$data->imgpath)}}"></a>
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
                @empty
                    <h3>对不起，暂无相关数据!</h3>
                @endforelse
            </ul>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('.class-body ul li').mouseover(function(e){
            $(this).css('box-shadow','5px 5px 2px rgba(46,139,87,1)');
//            box-shadow: 5px 5px 0 rgba(46,139,87,0.3);
        });
        $('.class-body ul li').mouseleave(function(e){
            $(this).css('box-shadow','');
        });
    </script>
@endsection