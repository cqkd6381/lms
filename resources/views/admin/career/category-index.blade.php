@extends('admin.admin')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">职业路径子分类列表</h3>
                        <a href="{{route('admin.career.create_category',['id'=>$id])}}" class="btn btn-primary text-right">添加子分类</a>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>编号</th>
                                <th>子分类名称</th>
                                <th>创建时间</th>
                                <th>创建人</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datas as $data)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->created_at}}</td>
                                    <td>{{$data->created_user}}</td>
                                    <td>
                                        <a href="{{route('admin.career.edit_category',['id'=>$data->id])}}">编辑</a>|
                                        <a href="{{route('get_careercourse',['career_id'=>$data->id])}}">课程管理</a>|
                                        <a href="#" onclick="return confirm('确定删除吗？');">删除</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                            </tr>
                            </tfoot>
                        </table>
                        <div class="text-right">
                            {{--{!! $datas->render() !!}--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection