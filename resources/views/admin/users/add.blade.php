@extends('admin.layout')
@section('content')
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Add Employee</h4>
    </div>
    <form action="{{route('admin.user.do-add')}}" method="POST">
        @csrf
        <div class="modal-body">
            <div class="form-group">
                <label>Name</label>
                <input name="name" type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input name="email" type="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input name="password" type="password" class="form-control" required></input>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success">Sửa</button>
        </div>
    </form>
</div>
@endsection