@extends('Layout.app')
<!-- Navbar -->

<!-- /.navbar -->

<!-- Main Sidebar Container -->

@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- /.content-header -->

    <!-- Main content -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Admin List</h1>
                    </div>
                    <div class="col-sm-6" style="text-align: right">
                        <a href="{{url('/class/assignindex')}}" class="btn btn-primary">assign class</a>

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <form method="get" action="">
            <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email </label>
                    <input type="email" class="form-control" id="exampleInputEmail1" value="" name="email" placeholder="Enter email">
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">search</button>
                </div>
            </div>
        </form>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Admin List</h3>
            </div>
            <!-- /.card-header -->
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
                            <td>#.</td>

                    </tbody>
                </table>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->



    <!-- /.content-wrapper -->
@endsection
