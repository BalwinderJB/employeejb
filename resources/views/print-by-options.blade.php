@extends('index')
@section('content')

        <!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Print</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Print</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->

                <!--/.col (left) -->
                <!-- right column -->
                <div class="card card-warning">
                    <div class="card-header sidebar-dark-primary elevation-4">
                        <h3 class="card-title">Print</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="table" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">

                                        <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Salary By Hours</th>
                                            <td class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                                <button class="btn btn-primary"><a href=""><h6 class="text-white">Button1</h6></a></button>
                                            </td>
                                            <td class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                                <button class="btn btn-primary"><a href=""><h6 class="text-white">Button2</h6></a></button>
                                            </td>
                                        </tr>

                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Salary By Performance</th>
                                            <td class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                                <button class="btn btn-primary"><a href=""><h6 class="text-white">Button2</h6></a></button>
                                            </td>
                                            <td class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                                <button class="btn btn-primary"><a href=""><h6 class="text-white">Button2</h6></a></button>
                                            </td>
                                        </tr>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Spot Bonus</th>
                                            <td class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                                <button class="btn btn-primary"><a href=""><h6 class="text-white">Button1</h6></a></button>
                                            </td>
                                            <td class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                                <button class="btn btn-primary"><a href=""><h6 class="text-white">Button2</h6></a></button>
                                            </td>
                                        </tr>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Target Bonus</th>
                                            <td class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                                <button class="btn btn-primary"><a href=""><h6 class="text-white">Button1</h6></a></button>
                                            </td>
                                            <td class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                                <button class="btn btn-primary"><a href=""><h6 class="text-white">Button2</h6></a></button>
                                            </td>
                                        </tr>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Travel</th>
                                            <td class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                                <button class="btn btn-primary"><a href=""><h6 class="text-white">Button1</h6></a></button>
                                                {{--<button class="btn btn-primary"><a href="{{ url('add-travel-expenses') }}"><h6 class="text-white">Add Travel Expenses</h6></a></button>--}}
                                            </td>
                                            <td class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                                <button class="btn btn-primary"><a href=""><h6 class="text-white">Button2</h6></a></button>
                                            </td>
                                        </tr>

                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Gross</th>
                                            <td colspan="2" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                                <input type="text" name="gross" placeholder="Gross..." class="form-control">
                                            </td>
                                        </tr>

                                        <tr role="row">
                                            <th colspan="3" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                                <button class="btn btn-primary"><a href=""><h6 class="text-white">PRINT & COMPLETE</h6></a></button>
                                            </th>
                                        </tr>

                                        </thead>

                                    </table></div></div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.car
                </div>
                <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>


@endsection
