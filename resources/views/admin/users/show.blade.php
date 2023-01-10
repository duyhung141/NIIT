@extends('admin.layout')
@section('content')
<div class="table-wrapper">
    <div class="table-title">
        <div class="row">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
                <a href="{{route('admin.user.add')}}" class="btn btn-success"><i class="material-icons"></i> <span>Add New Employee</span></a>
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datas as $data)
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>
                    <a href="{{route('admin.user.edit',['id'=>$data->id])}}" class="edit btn btn-warning"><i class="material-icons">Sửa</i></a>
                    <a href="{{route('admin.user.delete',['id'=>$data->id])}}" class="delete btn btn-danger"><i class="material-icons" >Xóa</i></a>
                </td>
            </tr>
            @endforeach
            <!-- {{$datas->links('vendor.pagination.bootstrap-4')}} -->
        </tbody>
    </table>
</div>
@endsection