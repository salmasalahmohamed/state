@extends('Layout.app')
@section('content')

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>assign class</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">assign class</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="{{url('class/create')}}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Enter name">
                                    </div>

                                    <div class="form-group">
                                        <label>status</label>
                                        <select class="form-control" name="status">
                                            <option value="0">active</option>
                                            <option value="1">inactive</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>status</label>
                                        <select class="form-control" name="class_id">
                                            <option value=>select class</option>
                                            @foreach($data as $date)
                                            <option value="1">{{$date['name']}}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
@endsection

