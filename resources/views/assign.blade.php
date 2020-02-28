@extends('index')
@section('content')

        <!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">View</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">View</li>
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
                        <h3 class="card-title">View</h3>
                    </div>
                    <!-- /.card-header -->
                    {{--<div class="card-body">--}}
                        {{--<form role="form">--}}
                            {{--@csrf--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<!-- text input -->--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label>Employee ID</label>--}}
                                        {{--<input type="text" class="form-control" placeholder="Enter ...">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label>Employee Name</label>--}}
                                        {{--<input type="text" class="form-control" placeholder="Enter ...">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label>Mobile</label>--}}
                                        {{--<input type="text" class="form-control" placeholder="Enter ...">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label>Total App</label>--}}
                                        {{--<input type="text" class="form-control" placeholder="Enter ...">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label>Active App</label>--}}
                                        {{--<input type="text" class="form-control" placeholder="Enter ...">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label>Paid App</label>--}}
                                        {{--<input type="text" class="form-control" placeholder="Enter ...">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label>Total Transaction</label>--}}
                                        {{--<input type="text" class="form-control" placeholder="Enter ...">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label>Amount</label>--}}
                                        {{--<input type="text" class="form-control" placeholder="Enter ...">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-4">--}}
                                    {{--<div class="form-group pt-4">--}}
                                        {{--<label></label>--}}
                                        {{--<button type="submit" class="btn btn-sm btn-primary">Search</button>--}}
                                        {{--<button type="submit" class="btn btn-sm btn-primary">Refresh</button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                    <!-- /.card-body -->

                    <div class="card-body">
                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"></div>
                                <div class="col-sm-12 col-md-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 table-responsive">
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
                                            <td class="sorting_1">1</td>
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
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled" id="example2_previous">
                                                <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                            </li>
                                            <li class="paginate_button page-item active">
                                                <a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                            </li>
                                            <li class="paginate_button page-item ">
                                                <a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                            </li>
                                            <li class="paginate_button page-item ">
                                                <a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                            </li>
                                            <li class="paginate_button page-item ">
                                                <a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                            </li>
                                            <li class="paginate_button page-item ">
                                                <a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                                            </li>
                                            <li class="paginate_button page-item ">
                                                <a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                                            </li>
                                            <li class="paginate_button page-item next" id="example2_next">
                                                <a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.car
            </div>
            <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid --></div>



</section>
<!-- /.content -->

<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>


@endsection
