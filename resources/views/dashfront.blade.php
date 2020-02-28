
@extends('index')
@section('content')

        <!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                {{--<h1 class="m-0 text-dark">Add Employee</h1>--}}
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    {{--<li class="breadcrumb-item"><a href="#">Home</a></li>--}}
                    {{--<li class="breadcrumb-item active">Add Employee</li>--}}
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
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $totalapps }}/{{ $totalapps }}</h3>

                        <h4>App Installed</h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $totalmemberships299 }}/{{ $totalmemberships299 }}</h3>

                        <h4>Membership Rs.299/-</h4>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $totalothermemberships }}/{{  $totalothermemberships }}</h3>

                        <h4>Other Membership</h4>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>Nothing</h3>

                        <h4>No Name</h4>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>Nothing</h3>

                        <h4>No Name</h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>Nothing</h3>

                        <h4>No Name</h4>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>Nothing</h3>

                        <h4>No Name</h4>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>Nothing</h3>

                        <h4>No Name</h4>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

        </div>



        <div class="row">
            <!-- left column -->
            <div class="col-md-12">

                <div class="card card-warning">
                    <div class="card-header sidebar-dark-primary elevation-4">
                        <h3 class="card-title">Report App</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"></div>
                                <div class="col-sm-12 col-md-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 table-responsive">
                                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">State</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">App Installed</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Membership Rs 299/-</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Other Membership</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Total Transactions</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="3" aria-label="Engine version: activate to sort column ascending"><h5 style="margin-left:190px;"><b>To View Details</b></h5></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($states as $key=>$state)
                                            <tr role="row" class="odd">
                                                @foreach($state_wise_apps as $sw_apps)
                                                    @if($key==$sw_apps->state_id)
                                                        <td>{{ $state }}</td>
                                                        <td><a href="#" class="text-success a-d">{{ $sw_apps->state_count }}</a> / <a href="#" class="text-success a-d">{{ $sw_apps->state_count }}</a></td>

                                                        @foreach($state_wise_membership299 as $state_membership299)
                                                            @if($key==$state_membership299->state_id)
                                                                <td><a href="#" class="text-success a-d">{{ $state_membership299->state_count }}</a> / <a href="#" class="text-success a-d">{{ $state_membership299->state_count }}</a></td>

                                                            @endif
                                                        @endforeach

                                                        @foreach($state_wise_membership_others as $state_membershipothers)
                                                            @if($key==$state_membershipothers->state_id)
                                                                <td class="sorting_1"><a href="#" class="text-success a-d">{{ $state_membershipothers->state_count }}</a> / <a href="#" class="text-success a-d">{{ $state_membershipothers->state_count }}</a></td>
                                                            @endif
                                                        @endforeach

                                                        @foreach($membership_transactions as $member_transactions)
                                                            @if($key==$member_transactions->state_id)
                                                                <td><a href="#" class="text-success a-d">{{ $member_transactions->price }}</a></td>
                                                            @endif
                                                        @endforeach
                                                        {{--<td> <button type="button" class="btn btn-primary"><a href="{{ url('viewfull') }}" class="text-white">View Full</a></button></td>--}}
                                                        {{--<td> <button type="button" class="btn btn-primary"><a href="{{ url('viewfull', $key) }}" class="text-white">View Full</a></button></td>--}}
                                                        {{--<td> <button type="button" class="btn btn-primary"><a href="{{url('state_wise_app_detail', $key)}}" class="text-white">View Full</a></button> </td>--}}
                                                        <td> <button type="button" class="btn btn-primary"><a href="{{url('state_wise_app_detail', $key)}}" class="text-white">View Membership</a></button> </td>
                                                        <td> <button type="button" class="btn btn-primary"><a href="{{url('state_wise_app_detail', $key)}}" class="text-white">View Transaction</a></button> </td>
                                                    @else
                                                        @continue;
                                                    @endif
                                                @endforeach
                                            </tr>
                                        @endforeach

                                        </tbody>
                                        <tfoot>
                                        <!--  <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr> -->
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                {{--<div class="col-sm-12 col-md-5">--}}
                                {{--<div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>--}}
                                {{--</div>--}}

                                <div class="row">
                                    <div class="col-sm-12 col-md-5"> {{ $state_wise_apps->links() }} </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>

                <div class="card card-warning">
                    <div class="card-header sidebar-dark-primary elevation-4">
                        <h3 class="card-title">Report Store</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"></div>
                                <div class="col-sm-12 col-md-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 table-responsive">
                                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">State</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">App Installed</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Membership Rs 299/-</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Other Membership</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Total Transactions</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="4" aria-label="Engine version: activate to sort column ascending"><h5 style="margin-left:230px;"><b>To View Details</b></h5></th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($states as $key=>$state)
                                            <tr role="row" class="odd">
                                                @foreach($state_wise_stores_apps as $sw_stores_apps)
                                                    @if($key==$sw_stores_apps->state_id)
                                                        <td>{{ $state }}</td>
                                                        <td><a href="{{url('state_wise_app_detail', $key)}}">{{ $sw_stores_apps->state_count }}</a></td>
                                                        {{--<td><a href="{{url('state_wise_app_detail', $key)}}" class="text-success a-d">{{ $sw_stores_apps->state_count }}</a> / <a href="{{url('state_wise_app_detail', $key)}}" class="text-success a-d">{{ $sw_stores_apps->state_count }}</a></td>--}}

                                                        @if($state_wise_stores_memberships299=='')
                                                            <td>No Membership of Rs. 299/-</td>
                                                        @else
                                                            @foreach($state_wise_stores_memberships299 as $state_store_membership299)
                                                                @if($key==$state_store_membership299->state_id)
                                                                    <td><a href="#" class="text-success a-d">{{ $state_store_membership299->state_count }}</a> / <a href="#" class="text-success a-d">{{ $state_store_membershipothers->state_count }}</a></td>
                                                                @endif
                                                            @endforeach
                                                        @endif

                                                        @foreach($state_wise_stores_other_memberships as $state_store_membershipothers)
                                                            @if($key==$state_store_membershipothers->state_id)
                                                                <td class="sorting_1"><a href="#" class="text-success a-d">{{ $state_store_membershipothers->state_count }}</a> / <a href="#" class="text-success a-d">{{ $state_store_membershipothers->state_amount }}</a></td>
                                                            @endif
                                                            @if($key!=$state_store_membershipothers->state_id && $state_store_membershipothers->state_count=='null')
                                                                <td class="sorting_1"><a href="#" class="text-success a-d">--</a> / <a href="#" class="text-success a-d">--</a></td>
                                                            @endif
                                                        @endforeach
                                                        @foreach($store_membership_transactions as $store_member_transactions)
                                                            @if($key==$store_member_transactions->state_id)
                                                                <td><a href="#" class="text-success a-d">{{ $store_member_transactions->price }}</a></td>
                                                            @endif
                                                        @endforeach
                                                        {{--                                                        <td> <button type="button" class="btn btn-primary"><a href="{{url('state_wise_app_detail', $key)}}" class="text-white">View Full</a></button> </td>--}}
                                                        <td> <button type="button" class="btn btn-primary"><a href="{{url('state_wise_app_detail', $key)}}" class="text-white">View Membership</a></button> </td>
                                                        <td> <button type="button" class="btn btn-primary"><a href="{{url('state_wise_store_transaction_detail', $key)}}" class="text-white">View Transaction</a></button> </td>
                                                        <td> <button type="button" class="btn btn-primary"><a href="{{url('state_wise_store_customer_detail', $key)}}" class="text-white">View Customer</a></button> </td>
                                                    @else

                                                    @endif
                                                @endforeach

                                            </tr>
                                        @endforeach

                                        </tbody>
                                        <tfoot>
                                        <!--  <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr> -->
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                        <ul class="pagination">
                                            {{--{{$states->links()}}--}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
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

