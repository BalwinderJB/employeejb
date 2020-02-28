@extends('index')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Users</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header sidebar-dark-primary elevation-4">
                            <h3 class="card-title">Users</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <select class="form-control un_js">
                                            <option value="un1">option 1</option>
                                            <option value="un2">option 2</option>
                                            <option value="un3">option 3</option>
                                            <option value="un4">option 4</option>
                                            <option value="un5">option 5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Permission</label>
                                    <div class="col-sm-10">
                                        <select class="form-control permission_js">
                                            <option value="pr1">option 1</option>
                                            <option value="pr2">option 2</option>
                                            <option value="pr3">option 3</option>
                                            <option value="pr4">option 4</option>
                                            <option value="pr5">option 5</option>
                                        </select>
                                    </div>
                                </div>
                                {{--<div class="form-group row">--}}
                                {{--<div class="offset-sm-2 col-sm-10">--}}
                                {{--<div class="form-check">--}}
                                {{--<input type="checkbox" class="form-check-input" id="exampleCheck2">--}}
                                {{--<label class="form-check-label" for="exampleCheck2">Remember me</label>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Assign</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
            </div>
        </div>
        </div>
    </section>
@endsection