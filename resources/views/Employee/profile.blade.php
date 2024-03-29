@extends('index')
@section('content')

        <!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">My Customers</h1>
            </div><!-- /.col -->

        </div><!-- /.row -->
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">

                <div class="card card-warning">
                    <div class="card-header sidebar-dark-primary elevation-4">
                        <h3 class="card-title">My Customers</h3>
                    </div>
                    <div class="card-body">
                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="table" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="input" placeholder="Search ...">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="nav-tabs-custom">

                                                    <div class="tab-content">

                                                        <div class="active tab-pane" id="reports">
                                                            <!-- Post -->
                                                            <div class="post">

                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                    <tr>
                                                                        <th scope="col" >S.no</th>
                                                                        <th scope="col" >Name</th>
                                                                        <th scope="col" >Email</th>
                                                                        <th scope="col" >Mobile</th>

                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                    <?php
                                                                    $sn_count = 1;
                                                                    ?>

                                                                    @foreach($data as $datas)
                                                                        <tr role="row" class="odd" >
                                                                            <td class="sorting_1">{{$sn_count++}}</td>
                                                                            <td>{{$datas->name}}</td>
                                                                            <td>{{$datas->email}}</td>
                                                                            <td>{{$datas->mobile_number}}</td>


                                                                        </tr>
                                                                    @endforeach



                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<!-- /.content -->

<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>


@endsection
