@extends('index')
@section('content')

        <!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Assign Pick View</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Assign Pick View</li>
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
                <div class="col-md-12">
                    <div class="card card-warning card-primary card-tabs">
                        <div class="card-header  sidebar-dark-primary elevation-4 p-0 pt-1">
                            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="false">Pending/Uncleared</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="true">Assigned</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Printed</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Cleared</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-one-tabContent">
                                <div class="tab-pane fade" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                    <div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Month</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Total</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Cash</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Cash</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Printed</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Cleared</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">View</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Gecko</td>
                                                <td>Firefox 1.0</td>
                                                <td>Firefox 1.0</td>
                                                <td>Firefox 1.0</td>
                                                <td>Firefox 1.0</td>
                                                <td>Firefox 1.0</td>
                                                <td><button type="button" class="btn btn-primary"><a href="{{route('view.view')}}" class="text-white">View</a></button></td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">Gecko</td>
                                                <td>Firefox 1.5</td>
                                                <td>Firefox 1.5</td>
                                                <td>Firefox 1.5</td>
                                                <td>Firefox 1.5</td>
                                                <td>Firefox 1.5</td>
                                                <td><button type="button" class="btn btn-primary"><a href="{{route('view.view')}}" class="text-white">View</a></button></td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <!--  <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr> -->
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade active show" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                    <div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Employee ID</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Total App</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Active</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Paid App</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Total Transaction</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Amount</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Salary 1</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Salary 2</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Spot</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Target</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Gross</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Manage</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr role="row" class="odd" >
                                                <td class="sorting_1">1</td>
                                                <td>200</td>
                                                <td>100</td>
                                                <td>50</td>
                                                <td>110</td>
                                                <td>2200</td>
                                                <td>10200</td>
                                                <td>5000</td>
                                                <td>500</td>
                                                <td>200</td>
                                                <td>17200</td>
                                                <td>
                                                    <button class="btn btn-primary"><a href="{{ url('assign-page-view') }}"><h6 class="text-white">View</h6></a></button>
                                                    <button class="btn btn-primary"><a href="{{ url('print-view') }}"><h6 class="text-white">Print</h6></a></button>
                                                </td>
                                            </tr>
                                            </tbody>


                                            <tfoot>
                                            <!--  <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr> -->
                                            </tfoot>
                                        </table>
                                    </div></div>
                                <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                                    <div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Month</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Total</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Cash</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Cash</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Printed</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Cleared</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">View</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Gecko</td>
                                                <td>Firefox 1.0</td>
                                                <td>Firefox 1.0</td>
                                                <td>Firefox 1.0</td>
                                                <td>Firefox 1.0</td>
                                                <td>Firefox 1.0</td>
                                                <td><button type="button" class="btn btn-primary"><a href="{{route('view.view')}}" class="text-white">View</a></button></td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">Gecko</td>
                                                <td>Firefox 1.5</td>
                                                <td>Firefox 1.5</td>
                                                <td>Firefox 1.5</td>
                                                <td>Firefox 1.5</td>
                                                <td>Firefox 1.5</td>
                                                <td><button type="button" class="btn btn-primary"><a href="{{route('view.view')}}" class="text-white">View</a></button></td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <!--  <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr> -->
                                            </tfoot>
                                        </table>
                                    </div>                                  </div>
                                <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
                                    <div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Month</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Total</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Cash</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Cash</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Printed</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Cleared</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">View</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Gecko</td>
                                                <td>Firefox 2.0</td>
                                                <td>Firefox 2.0</td>
                                                <td>Firefox 2.0</td>
                                                <td>Firefox 2.0</td>
                                                <td>Firefox 2.0</td>
                                                <td><button type="button" class="btn btn-primary"><a href="{{route('view.view')}}" class="text-white">View</a></button></td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">Gecko</td>
                                                <td>Firefox 3.0</td>
                                                <td>Firefox 3.0</td>
                                                <td>Firefox 3.0</td>
                                                <td>Firefox 3.0</td>
                                                <td>Firefox 3.0</td>
                                                <td><button type="button" class="btn btn-primary"><a href="{{route('view.view')}}" class="text-white">View</a></button></td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <!--  <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr> -->
                                            </tfoot>
                                        </table>
                                    </div></div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
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
