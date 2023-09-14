@extends('Layout.app')
@section('content')
<div class="card-body p-0">
    <table class="table table-striped">
        <thead>
        <tr>
            <th >#</th>
            <th>name</th>
            <th>email</th>
            <th>created at</th>

        </tr>
        </thead>
        <tbody>

            <tr>
                <td>4.</td>
                <td>{{$data['name']}}</td>

                <td><span >{{$data['email']}}</span></td>
                <td><span >{{$data['created_at']}}</span></td>

            </tr>

        </tbody>
    </table>
<form method="post" action="{{url('updateadmin'.$data['id'])}}">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{$data['name']}}" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email </label>
            <input type="email" class="form-control" id="exampleInputEmail1" value="{{$data['email']}}" name="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label>role</label>
            <input type="number" class="form-control" name="role" value="{{$data['role']}}" placeholder="Enter role">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1"  name="password" placeholder="Password">
        </div>


    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection
</div>
