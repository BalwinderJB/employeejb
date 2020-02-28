@extends('index')
@section('content')

        <!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Add Shopkeeper</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Add Shopkeeper</li>
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
                        <div class="card-header p-0 pt-1">
                            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-location" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Location</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Basic Info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Images/Logo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Menu/Images</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Time</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">T & C</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Keywords</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Shop Agreement</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-one-tabContent">
                                <div class="tab-pane fade active show" id="custom-tabs-one-location" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                    <div class="col-sm-12">
                                        <div class="card-body">
                                            {{--<form role="form">--}}
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Country</label>
                                                        <select name="country" id="country" class="form-control">
                                                            <option value="">--Select Country--</option>
                                                            {{--@foreach($country_master as $key => $country)--}}
                                                                {{--<option value="{{$key}}"> {{$country}}</option>--}}
                                                            {{--@endforeach--}}
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>State</label>
                                                        {{--<select name="state" id="state" class="form-control dynamic" data-dependent="city">--}}
                                                        <select name="state" id="state" class="form-control">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>City</label>
                                                        <select name="city" id="city" class="form-control">
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                    <div class="col-sm-12 table-responsive">
                                        <table id="table" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
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
                                                <td>13</td>
                                                <td>3000</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <button type="submit" class="btn btn-sm btn-primary"><a href="{{route('grossview.grossview')}}" class="text-white">View</a></button>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#assign-print">Print</button>

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
                                                        </div>
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
