@extends('index')
@section('content')


    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Salary Admin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Salary Admin</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-warning">
                <div class="card-header sidebar-dark-primary elevation-4">
                    <h3 class="card-title">Search</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-12">
                                <div class="col-md-2" >
                                    <div class="form-group">
                                        {{--<label for="employee_id">Employee_id</label>--}}
                                        <input type="number" id="emp_id" placeholder="Employee_id" class="form-control"aria-describedby="emailHelp">
                                    </div>
                                </div>

                                <div class="col-md-2" style="margin-left: 200px; margin-top: -52px;">
                                    <div class="form-group">
                                        {{--<label for="employee_type">Employee_type</label>--}}
                                        <input placeholder="Employee_type" type="text"  name="emp_type" class="form-control">
                                    </div>
                                </div>
                                </div>
                            </div>

                        <div class="col-md-2" style="margin-left: 400px; margin-top: -52px;">
                            <div class="form-group">
                                {{--<label for="employee_name">Employee_Name</label>--}}
                                <input placeholder="Employee_name" id="name" type="text" name="emp_name" class="form-control" >
                            </div>
                        </div>

                        <div class="col-md-2" style="margin-left: 600px; margin-top: -52px;">
                            <div class="form-group">
                                {{--<label for="state">State</label>--}}
                                <input placeholder="State" type="text" name="state" class="form-control" >
                            </div>
                        </div>

                        <div class="col-md-2" style="margin-left: 800px; margin-top: -52px;">
                            <div class="form-group">
                                {{--<label for="city">City</label>--}}
                                <input placeholder="City" type="text" name="city" class="form-control" >
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                {{--<label for="city">City</label>--}}
                                <input placeholder="City"  type="text" name="city" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-2" style="margin-left: 200px; margin-top: -52px;">
                            <div class="form-group">
                                {{--<label for="city">City</label>--}}
                                <input placeholder="City" type="text" name="city" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-2" style="margin-left: 400px; margin-top: -52px;">
                            <div class="form-group">
                                {{--<label for="city">City</label>--}}
                                <input placeholder="City" type="text" name="city" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-2" style="margin-left: 600px; margin-top: -52px;">
                            <div class="form-group">
                                {{--<label for="city">City</label>--}}
                                <input placeholder="City" type="text" name="city" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-2" style="margin-left: 800px; margin-top: -52px;">
                            <div class="form-group">
                                {{--<label for="city">City</label>--}}
                                <input placeholder="City" type="text" name="city" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                {{--<label for="city">City</label>--}}
                                <input placeholder="City" type="text" name="city" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-2" style="margin-left: 200px; margin-top: -52px;">
                            <div class="form-group">
                                {{--<label for="city">City</label>--}}
                                <input placeholder="City" type="text" name="city" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-2" style="margin-left: 400px; margin-top: -52px;">
                            <div class="form-group">
                                {{--<label for="city">City</label>--}}
                                <input placeholder="City" type="text" name="city" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-2" style="margin-left: 600px; margin-top: -52px;">
                            <div class="form-group">
                                {{--<label for="city">City</label>--}}
                                <input placeholder="City" type="text" name="city" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-2" style="margin-left: 800px; margin-top: -52px;">
                            <div class="form-group">
                                {{--<label for="city">City</label>--}}
                                <input placeholder="City" type="text" name="city" class="form-control">
                            </div>
                        </div>
                        {{--<div class="form-group form-check">--}}
                            {{--<input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
                            {{--<label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
                        {{--</div>--}}

                        <div class="col-md-12">
                            <div class="form-group" align="center">
                                {{--<label for="city">City</label>--}}
                                <button type="submit" class="btn btn-primary" >Search</button>
                            </div>
                        </div>

                    </form>
                    {{--<div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">--}}
                                    {{--<thead>--}}
                                    {{--<tr role="row">--}}
                                        {{--<input type="text" name="e_id">--}}
                                    {{--</tr>--}}
                                    {{--</thead>--}}
                                    {{--<tbody>--}}
                                    {{--<tr role="row" class="odd">--}}
                                        {{--<td class="sorting_1">Gecko</td>--}}
                                        {{--<td>Firefox 1.0</td>--}}
                                        {{--<td><button type="button" class="btn btn-primary">Edit</button> <button type="button" class="btn btn-danger">Delete</button></td>--}}
                                    {{--</tr>--}}
                                    {{--<tr role="row" class="even">--}}
                                        {{--<td class="sorting_1">Gecko</td>--}}
                                        {{--<td>Firefox 1.5</td>--}}
                                        {{--<td><button type="button" class="btn btn-primary">Edit</button> <button type="button" class="btn btn-danger">Delete</button></td>--}}
                                    {{--</tr>--}}
                                    {{--<tr role="row" class="odd">--}}
                                        {{--<td class="sorting_1">Gecko</td>--}}
                                        {{--<td>Firefox 2.0</td>--}}
                                        {{--<td><button type="button" class="btn btn-primary">Edit</button> <button type="button" class="btn btn-danger">Delete</button></td>--}}
                                    {{--</tr>--}}
                                    {{--<tr role="row" class="even">--}}
                                        {{--<td class="sorting_1">Gecko</td>--}}
                                        {{--<td>Firefox 3.0</td>--}}
                                        {{--<td><button type="button" class="btn btn-primary">Edit</button> <button type="button" class="btn btn-danger">Delete</button></td>--}}
                                    {{--</tr>--}}
                                    {{--</tbody>--}}
                                    {{--<tfoot>--}}
                                    {{--<!--  <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr> -->--}}
                                    {{--</tfoot>--}}
                                {{--</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>--}}
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->


            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>






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
                        <div class="card-header p-0 pt-1">
                            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Pending/Uncleared</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Assigned</a>
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
                                <div class="tab-pane fade active show" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                    <div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Month</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">E_id</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">E_name</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Free_Sales</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Paid_Sales</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Total_Trans</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Spot_Achieved</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">T_Achieved</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Salary</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Assign</th>
                                            </tr>
                                            </thead>
                                            <tbody>

{{--                                            @foreach($data as $key => $data1)--}}
                                            @foreach($data as $data1)

                                            <tr role="row" class="odd">
                                                <td class="sorting_1">January</td>
                                                <td>{{ $data1->emp_id }}</td>
                                                <td>{{ $data1->name }}</td>
                                                <td>{{ $data1->transaction}}</td>
                                                <td>60</td>
                                                <td>{{$data1->total_count}}</td>
                                                <td>50</td>
                                                <td>50</td>
                                                <td>5000/-</td>
                                                <td><button type="button" class="btn btn-primary btn-sm"><a href="{{route('view.view')}}" class="text-white">Assign</a></button>
                                                <button type="button" class="btn btn-primary btn-sm"><a href="#" class="text-white">Pick</a></button></td>
                                            </tr>

                                            @endforeach

                                            </tbody>
                                            <tfoot>
                                            <!--  <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr> -->
                                            </tfoot>
                                        </table>
                                        <div>
                                            {{ $data->links() }}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                    <td class="col-sm-12 table-responsive">
                                        <table id="table" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                            {{--<div class="col-md-12">--}}
                                            {{--<div class="form-group filter-table">--}}
                                            {{--<input type="text" class="form-control" id="input" placeholder="Search ...">--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Employee ID</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Total App</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Active App</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Paid App</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Total Transaction</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Amount</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Salary 1</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Salary 2</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Spot Bonus</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Target Bonus</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Gross</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Manage</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr role="row" class="odd" >
                                                <td class="sorting_1">{{ $eid }}</td>
                                                <td>{{ $totalapps }}</td>
                                                <td>{{ $totalapps }}</td>
                                                <td>{{ $totalothermemberships }}</td>
                                                <td>{{ $totalothermemberships }}</td>
                                                <td>Rs. {{ $other_memberships_transaction_amount[0]->price }}/-</td>
                                                {{--<td>Rs. {{ $other_memberships[0]->price }}/-</td>--}}
                                                @if($e_salary[0]->employeejb_basic_venue=="null")
                                                <td>Rs. {{ $e_salary[0]->employeejb_bdm }}/-</td>
                                                @else
                                                <td>Rs. {{ $e_salary[0]->employeejb_basic_venue }}/-</td>
                                                @endif
                                                <td>8500</td>
                                                <td>{{ $e_salary[0]->employeejb_free_app_target_venue }}</td>
                                                <td>13</td>
                                                <td>3000</td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary btn-sm "><a href="{{route('grossview.grossview')}}" class="text-white">View</a></button>
                                                    <button type="submit" class="btn btn-primary btn-sm "><a href="#" class="text-white">Left</a></button>
                                                    <button type="submit" class="btn btn-primary btn-sm "><a href="#" class="text-white">Sacked</a></button>
                                                    <button type="button" class="btn btn-primary btn-sm " data-toggle="modal" data-target="#assign-print">confirmed Payment</button>
                                                </td>

                                                    <div class="modal fade" id="assign-print">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Print</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form role="form" class="form-horizontal">
                                                                        @csrf
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <!-- text input -->
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-2 col-form-label">Salary by hours</label>
                                                                                    <div class="col-sm-4">
                                                                                        <input type="text" class="form-control" placeholder="Enter ...">
                                                                                    </div>
                                                                                    <div class="col-sm-4">
                                                                                        <input type="text" class="form-control" placeholder="Enter ...">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <!-- text input -->
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-2 col-form-label">Salary by performance</label>
                                                                                    <div class="col-sm-4">
                                                                                        <input type="text" class="form-control" placeholder="Enter ...">
                                                                                    </div>
                                                                                    <div class="col-sm-4">
                                                                                        <input type="text" class="form-control" placeholder="Enter ...">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <!-- text input -->
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-2 col-form-label">Spot Bonus</label>
                                                                                    <div class="col-sm-4">
                                                                                        <input type="text" class="form-control" placeholder="Enter ...">
                                                                                    </div>
                                                                                    <div class="col-sm-4">
                                                                                        <input type="text" class="form-control" placeholder="Enter ...">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <!-- text input -->
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-2 col-form-label">Target Bonus</label>
                                                                                    <div class="col-sm-4">
                                                                                        <input type="text" class="form-control" placeholder="Enter ...">
                                                                                    </div>
                                                                                    <div class="col-sm-4">
                                                                                        <input type="text" class="form-control" placeholder="Enter ...">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <!-- text input -->
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-2 col-form-label">Travelling</label>
                                                                                    <div class="custom-file col-sm-8">
                                                                                        <input type="file" class="custom-file-input" id="customFile">
                                                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <!-- text input -->
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-2 col-form-label">Gross</label>
                                                                                    <div class="col-sm-8">
                                                                                        <input type="text" class="form-control" placeholder="Enter ...">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary">Print</button>
                                                                </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    {{--<button type="submit" class="btn btn-sm btn-primary"><a href="{{route('assign.assign')}}" class="text-white">View</a></button>--}}
                                                    {{--<button type="submit" class="btn btn-sm btn-primary"><a href="" class="text-white">Print</a></button>--}}
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">2</td>
                                                <td>2</td>
                                                <td>2</td>
                                                <td>4</td>
                                                <td>500</td>
                                                <td>500</td>
                                                <td>8400</td>
                                                <td>8500</td>
                                                <td>13</td>
                                                <td>13</td>
                                                <td>3000</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <button type="submit" class="btn btn-sm btn-primary"><a href="{{route('grossview.grossview')}}" class="text-white">View</a></button>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#assign-print">Print</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">3</td>
                                                <td>2</td>
                                                <td>2</td>
                                                <td>4</td>
                                                <td>500</td>
                                                <td>500</td>
                                                <td>8400</td>
                                                <td>8500</td>
                                                <td>13</td>
                                                <td>13</td>
                                                <td>3000</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <button type="submit" class="btn btn-sm btn-primary"><a href="{{route('grossview.grossview')}}" class="text-white">View</a></button>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#assign-print">Print</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">4</td>
                                                <td>2</td>
                                                <td>2</td>
                                                <td>4</td>
                                                <td>500</td>
                                                <td>500</td>
                                                <td>8400</td>
                                                <td>8500</td>
                                                <td>13</td>
                                                <td>13</td>
                                                <td>3000</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <button type="submit" class="btn btn-sm btn-primary"><a href="{{route('grossview.grossview')}}" class="text-white">View</a></button>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#assign-print">Print</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <!--  <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr> -->
                                            </tfoot>
                                        </table>
                                    </div>                                  </div>
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
                                    </div>                                  </div>
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

@section('scripts')

<script>
    $(document).ready(function(){
        $("#name").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#example2 tbody tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

<script>
    $(document).ready(function(){
        $("#emp_id").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#example2 tbody tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

@endsection