@extends('index')
@section('content')

        <!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Verify Shop</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Verify Shop</li>
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
                <div class="col-md-2">
                    <div class="form-group filter-table">
                        <input type="text" class="form-control" id="shopid" placeholder="Shop ID Search ...">
                    </div>
                </div>
                <div class="col-md-2" style="margin-top:-55px; margin-left:220px;">
                    <div class="form-group filter-table">
                        <input type="text" class="form-control" id="shopstorename" placeholder="Shop Name Search ...">
                    </div>
                </div>
                <div class="col-md-2" style="margin-top:-55px; margin-left:440px;">
                    <div class="form-group filter-table">
                        <input type="text" class="form-control" id="shopstatus" placeholder="Status Search ...">
                    </div>
                </div>
                <div class="col-md-2" style="margin-top:-55px; margin-left:660px;">
                    <div class="form-group filter-table">
                        <input type="text" class="form-control" id="shopdate" placeholder="Date To Search ...">
                    </div>
                </div>
                <div class="col-md-2" style="margin-top:-55px; margin-left:880px;">
                    <div class="form-group filter-table">
                        <input type="text" class="form-control" id="shopdatefrom" placeholder="Date From Search ...">
                    </div>
                </div>
                <div class="col-md-2" style="margin-top:-55px; margin-left:1100px;">
                    <div class="form-group filter-table">
                        <input type="text" class="form-control" id="shopstate" placeholder="State Search ...">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group filter-table">
                        <input type="text" class="form-control" id="shopcity" placeholder="City Search ...">
                    </div>
                </div>
                <div class="col-md-2" style="margin-top:-55px; margin-left:220px;">
                    <div class="form-group filter-table">
                        <input type="text" class="form-control" id="input1" placeholder="Search ...">
                    </div>
                </div>
                <div class="col-md-2" style="margin-top:-55px; margin-left:440px;">
                    <div class="form-group filter-table">
                        <input type="text" class="form-control" id="input1" placeholder="Search ...">
                    </div>
                </div>
                <div class="col-md-2" style="margin-top:-55px; margin-left:660px;">
                    <div class="form-group filter-table">
                        <input type="text" class="form-control" id="input1" placeholder="Search ...">
                    </div>
                </div>
                <div class="col-md-2" style="margin-top:-55px; margin-left:880px;">
                    <div class="form-group filter-table">
                        <input type="text" class="form-control" id="input1" placeholder="Search ...">
                    </div>
                </div>
                <div class="col-md-2" style="margin-top:-55px; margin-left:1100px;">
                    <div class="form-group filter-table">
                        <input type="text" class="form-control" id="input1" placeholder="Search ...">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group filter-table">
                        <input type="text" class="form-control" id="input1" placeholder="Search ...">
                    </div>
                </div>
                <div class="col-md-2" style="margin-top:-55px; margin-left:220px;">
                    <div class="form-group filter-table">
                        <input type="text" class="form-control" id="input1" placeholder="Search ...">
                    </div>
                </div>
                <div class="col-md-6" style="margin-top:-55px; margin-left:440px;">
                    <div class="form-group filter-table">
                        <input type="text" class="form-control" id="input" placeholder="Search ...">
                    </div>
                </div>
                <div class="col-md-2" style="margin-top:-55px; margin-left:1100px;">
                    <div class="form-group filter-table">
                        <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </div>
                </div>

                @role('Admin')

                <div class="col-md-12">
                    <div class="card card-warning card-primary card-tabs">
                        <div class="card-header p-0 pt-1">
                            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">All Unpicked Shops</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Designer</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Content Writer</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Manager</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-one-tabContent">
                                <div class="tab-pane fade active show" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                    <div class="card card-warning">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                                        <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">S. No.</th>
                                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Date</th>
                                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Shop ID</th>
                                                            {{--<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Store Name</th>--}}
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Shop Name</th>
                                                            {{--<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Shopkeeper Name</th>--}}
                                                            {{--<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Contact No.</th>--}}
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">State</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">City</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Status</th>
                                                            {{--<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Address</th>--}}
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Logo</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Banner</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Images Front</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Images Inner</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Manage</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($shops as $index => $shop)
                                                                <tr role="row" class="odd">
                                                                    <td class="sorting_1">{{ $index+1 }}</td>
                                                                    {{--<td class="sorting_1">{{ $shop->private_store_name }}</td>--}}
                                                                    <td id="td_date">{{ $shop->created_at }}</td>
                                                                    <td id="td_shopid">{{ $shop->store_id }}</td>
                                                                    <td id="td_storename">{{ $shop->private_store_name }}</td>
                                                                    <td id="td_statename">{{ $shop->state_name }}</td>
                                                                    <td id="td_cityname">{{ $shop->city_name }}</td>
                                                                    <td id="td_status"><button type="button" class="btn btn-primary">Inactive</button></td>
                                                                    {{--<td>{{ $shop->status }}</td>--}}
{{--                                                                    <td>{{ $shop->private_address_line_1.', '.$shop->private_address_line_2.', '.$shop->private_address_line_3 }}</td>--}}
                                                                    <td><img height="50" width="70" src="/images/shop_logos/{{$shop->logo }}"></td>
                                                                    <td><img height="50" width="70" src="/images/shop_banners/{{$shop->banner }}"></td>
                                                                    <td>{{ $shop->front_image_1 }}</td>
                                                                    <td>{{ $shop->inner_image_1 }}</td>
                                                                    <td><button type="button" class="btn btn-primary"><a href="#" class="text-white">Pick</a></button></td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                        <!--  <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr> -->
                                                        </tfoot>
                                                    </table>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-5">
                                                            {{ $shops->links() }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                    <div class="col-sm-12 table-responsive">
                                        <div class="card card-warning">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                                            <thead>
                                                            <tr role="row">
                                                                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Store Name</th>
                                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Shopkeeper Name</th>
                                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Contact No.</th>
                                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Address</th>
                                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Logo</th>
                                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Banner</th>
                                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Manage</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($shops as $shop)
                                                                @if($shop->logo=='' || $shop->banner=='')
                                                                <tr role="row" class="odd">
                                                                    <td class="sorting_1">{{ $shop->private_store_name }}</td>
                                                                    <td>{{ $shop->private_person_name }}</td>
                                                                    <td>{{ $shop->private_number_1 }}</td>
                                                                    <td>{{ $shop->private_address_line_1.', '.$shop->private_address_line_2.', '.$shop->private_address_line_3 }}</td>
                                                                    <td><img height="50" width="70" src="/images/shop_logos/{{$shop->logo }}"></td>
                                                                    <td><img height="50" width="70" src="/images/shop_banners/{{$shop->banner }}"></td>
                                                                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#upload_logo_banner_{{ $shop->id }}">Upload</button>
                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="upload_logo_banner_{{ $shop->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Upload Logo & Banner</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                {{--<h4>{{ $shop->id }}</h4>--}}
                                                                                <form role="form" method="post" action="{{ Route('update-logo-banner.update-logo-banner',$shop->store_id) }}" enctype="multipart/form-data">
                                                                                    @csrf
                                                                                    <input type="hidden" value="{{ $shop->id }}">
                                                                                    <div class="modal-body">
                                                                                        <div style="margin-top:10px;">
                                                                                            <label>Logo</label>
                                                                                            <input type="file" name="logo" class="form-control">
                                                                                        </div>
                                                                                        <div style="margin-top:10px;">
                                                                                            <label>Banner</label>
                                                                                            <input type="file" name="banner" class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Modal -->
                                                                </tr>
                                                                @else
                                                                    <tr role="row" class="odd">
                                                                        <td class="sorting_1">{{ $shop->private_store_name }}</td>
                                                                        <td>{{ $shop->private_person_name }}</td>
                                                                        <td>{{ $shop->private_number_1 }}</td>
                                                                        <td>{{ $shop->private_address_line_1.', '.$shop->private_address_line_2.', '.$shop->private_address_line_3 }}</td>
                                                                        <td><img height="50" width="70" src="/images/shop_logos/{{$shop->logo }}"></td>
                                                                        <td><img height="50" width="70" src="/images/shop_banners/{{$shop->banner }}"></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-success" disabled>Uploaded</button>
                                                                            @if($shop->design_issue_comments=='')
                                                                            @else
                                                                                <button type="button" class="btn btn-primary" data-toggle="modal" style="margin-top:10px;" data-target="#designer_issue_solve_{{ $shop->id }}">Issue</button>
                                                                            @endif
                                                                        </td>

                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="designer_issue_solve_{{ $shop->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                <div class="modal-dialog" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="exampleModalLabel">Upload Logo & Banner</h5>
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <form role="form" method="post" action="{{ Route('update-logo-banner.update-logo-banner',$shop->store_id) }}" enctype="multipart/form-data">
                                                                                            @csrf
                                                                                            <input type="hidden" value="{{ $shop->id }}">
                                                                                            <div class="modal-body">
                                                                                                <div style="margin-top:10px;">
                                                                                                    <label>Manager's Comment</label>
                                                                                                    <input type="text" value="{{ $shop->design_issue_comments }}" class="form-control" readonly>
                                                                                                </div>
                                                                                                <div style="margin-top:10px;">
                                                                                                    <label>Logo</label>
                                                                                                    <input type="file" name="logo" class="form-control">
                                                                                                </div>
                                                                                                <div style="margin-top:10px;">
                                                                                                    <label>Banner</label>
                                                                                                    <input type="file" name="banner" class="form-control">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- Modal -->


                                                                            {{--<td><button type="button" class="btn btn-success" disabled><a href="#" class="text-white">Approved</a></button></td>--}}
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-5">
                                                                {{ $shops->links() }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                                    <div class="card card-warning">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                                        <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Store Name</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Shopkeeper Name</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Contact No.</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Address</th>
                                                            {{--<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Logo</th>--}}
                                                            {{--<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Banner</th>--}}
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">T n C</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Agreement</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Manage</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($shops as $shop)
                                                            @if($shop->physical_agreement=='' || $shop->term_condition=='')
{{--                                                            @if($shop->is_approved_by_designer==0 && $shop->term_condition=='')--}}
{{--                                                            @if($shop->term_condition=='' || $shop->web_logo=='' || $shop->app_logo=='' || $shop->web_banner_1=='' || $shop->app_banner_1=='')--}}
                                                                <tr role="row" class="odd">
                                                                    <td class="sorting_1">{{ $shop->private_store_name }}</td>
                                                                    <td>{{ $shop->private_person_name }}</td>
                                                                    <td>{{ $shop->private_number_1 }}</td>
                                                                    <td>{{ $shop->private_address_line_1.', '.$shop->private_address_line_2.', '.$shop->private_address_line_3 }}</td>
                                                                    <td>{{ $shop->term_condition }}</td>
                                                                    <td>{{ $shop->physical_agreement }}</td>
                                                                    {{--<td>{{ $shop->term_condition }}</td>--}}
                                                                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#upload_agreement_{{ $shop->id }}">Upload</button></td>
                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="upload_agreement_{{ $shop->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Upload Agreement</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                {{--<h4>{{ $shop->id }}</h4>--}}
                                                                                <form role="form" method="post" action="{{ Route('update-agreement.update-agreement',$shop->store_id) }}" enctype="multipart/form-data">
                                                                                    @csrf
                                                                                    <input type="hidden" value="{{ $shop->id }}">
                                                                                    <div class="modal-body">
                                                                                        <div style="margin-top:10px;">
                                                                                            <label>Upload Agreement</label>
                                                                                            <input type="file" name="physical_agreement" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" class="form-control">
                                                                                        </div>
                                                                                        <div style="margin-top:10px;">
                                                                                            <label>Upload TnC</label>
                                                                                            <input type="file" name="term_condition" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Modal -->
                                                                </tr>
                                                            @else
                                                                <tr role="row" class="odd">
                                                                    <td class="sorting_1">{{ $shop->private_store_name }}</td>
                                                                    <td>{{ $shop->private_person_name }}</td>
                                                                    <td>{{ $shop->private_number_1 }}</td>
                                                                    <td>{{ $shop->private_address_line_1.', '.$shop->private_address_line_2.', '.$shop->private_address_line_3 }}</td>
{{--                                                                    <td>{{ $shop->web_logo."\n".$shop->app_logo }}</td>--}}
{{--                                                                    <td>{{ $shop->web_banner_1.' '.$shop->app_banner_1 }}<img height="50" width="70" src="/images/shop_banners/{{$shop->web_banner_1}}"></td>--}}
                                                                    <td>{{ $shop->term_condition }}</td>
                                                                    <td>{{ $shop->physical_agreement }}</td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-success" disabled>Approved</button>
                                                                        @if($shop->content_issue_comments=='')
                                                                        @else
                                                                            <button type="button" class="btn btn-primary" data-toggle="modal" style="margin-top:10px;" data-target="#content_issue_solve_{{ $shop->id }}">Issue</button>
                                                                        @endif
                                                                    </td>

                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="content_issue_solve_{{ $shop->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Upload Agreement</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <form role="form" method="post" action="{{ Route('update-agreement.update-agreement',$shop->store_id) }}" enctype="multipart/form-data">
                                                                                    @csrf
                                                                                    <input type="hidden" value="{{ $shop->id }}">
                                                                                    <div class="modal-body">
                                                                                        <div style="margin-top:10px;">
                                                                                            <label>Manager's Comment</label>
                                                                                            <input type="text" value="{{ $shop->content_issue_comments }}" class="form-control" readonly>
                                                                                        </div>
                                                                                        <div style="margin-top:10px;">
                                                                                            <label>Upload Agreement</label>
                                                                                            <input type="file" name="physical_agreement" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" class="form-control">
                                                                                        </div>
                                                                                        <div style="margin-top:10px;">
                                                                                            <label>Upload TnC</label>
                                                                                            <input type="file" name="term_condition" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Modal -->

                                                                </tr>
                                                            @endif
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-5">
                                                            {{ $shops->links() }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
                                    <div class="card card-warning">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                                        <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Store Name</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Shopkeeper Name</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Contact No.</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Address</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Logo</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Banner</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">T&C</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Agreement</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Manage</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($shops as $shop)
                                                                @if($shop->is_design_uploaded==1 && $shop->is_content_uploaded==1 && $shop->is_all_approved==0)
    {{--                                                            @if($shop->term_condition<>'' && $shop->web_logo<>'' && $shop->app_logo<>'' && $shop->web_banner_1<>'' && $shop->app_banner_1<>'')--}}
                                                                    <tr role="row" class="odd">
                                                                        <td class="sorting_1">{{ $shop->private_store_name }}</td>
                                                                        <td>{{ $shop->private_person_name }}</td>
                                                                        <td>{{ $shop->private_number_1 }}</td>
                                                                        <td>{{ $shop->private_address_line_1.', '.$shop->private_address_line_2.', '.$shop->private_address_line_3 }}</td>
                                                                        <td><img height="50" width="70" src="/images/shop_logos/{{$shop->logo}}"></td>
                                                                        <td><img height="50" width="70" src="/images/shop_logos/{{$shop->banner}}"></td>
                                                                        <td>TnC Done</td>
                                                                        {{--<td>{{ $shop->term_condition }}</td>--}}
                                                                        <td>{{ $shop->physical_agreement }}</td>
                                                                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#approve_design_agreement_{{ $shop->id }}">Approve</button></td>
                                                                        <!-- Modal -->
                                                                        <div class="modal fade" id="approve_design_agreement_{{ $shop->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="exampleModalLabel">Approve Design Agreement</h5>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <form role="form" method="post" action="{{ Route('approve-design-agreement.approve-design-agreement',$shop->store_id) }}">
                                                                                        @csrf
                                                                                        <input type="hidden" value="{{ $shop->id }}">
                                                                                        <div class="modal-body">
                                                                                            <div style="margin-top:10px;">
                                                                                                <label>Design Approved</label>
                                                                                                <div style="margin-top:-40px; margin-left:-110px;"><input type="checkbox" name="design_approved" class="form-control"></div>
                                                                                            </div>

                                                                                            <div style="margin-top:10px;">
                                                                                                <label>Design Issue Comments</label>
                                                                                                <input type="text" name="design_issue_comments" class="form-control" placeholder="Enter Design Issue Comments">
                                                                                            </div>

                                                                                            <div style="margin-top:10px;">
                                                                                                <label>Content Approved</label>
                                                                                                <div style="margin-top:-35px; margin-left:-110px;"><input type="checkbox" name="content_approved" class="form-control"></div>
                                                                                            </div>

                                                                                            <div style="margin-top:10px;">
                                                                                                <label>Content Issue Comments</label>
                                                                                                <input type="text" name="content_issue_comments" class="form-control" placeholder="Enter Content Issue Comments">
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Modal -->
                                                                    </tr>
                                                                @else
                                                                    @if($shop->is_all_approved==1)
                                                                        <tr role="row" class="odd">
                                                                            <td class="sorting_1">{{ $shop->private_store_name }}</td>
                                                                            <td>{{ $shop->private_person_name }}</td>
                                                                            <td>{{ $shop->private_number_1 }}</td>
                                                                            <td>{{ $shop->private_address_line_1.', '.$shop->private_address_line_2.', '.$shop->private_address_line_3 }}</td>
                                                                            <td><img height="50" width="70" src="/images/shop_logos/{{$shop->logo}}"></td>
                                                                            <td><img height="50" width="70" src="/images/shop_banners/{{$shop->banner}}"></td>
                                                                            <td>TnC Done</td>
                                                                            <td>{{ $shop->physical_agreement }}</td>
                                                                            <td><button type="button" class="btn btn-success" disabled>Approved</button></td>
                                                                        </tr>
                                                                    @endif
                                                                @endif
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-5">
                                                            {{ $shops->links() }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endrole

                @role('ContentWriter')

                <div class="col-md-12">
                    <div class="card card-warning card-primary card-tabs">
                        <div class="card-header p-0 pt-1">
                            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">All Unpicked Shops</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Content Writer</a>
                                </li>

                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-one-tabContent">
                                <div class="tab-pane fade active show" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                    <div class="card card-warning">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                                        <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">S. No.</th>
                                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Date</th>
                                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Shop ID</th>
                                                            {{--<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Store Name</th>--}}
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Shop Name</th>
                                                            {{--<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Shopkeeper Name</th>--}}
                                                            {{--<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Contact No.</th>--}}
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">State</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">City</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Status</th>
                                                            {{--<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Address</th>--}}
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Logo</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Banner</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Images Front</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Images Inner</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Manage</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($shops as $index => $shop)
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1">{{ $index+1 }}</td>
                                                                {{--<td class="sorting_1">{{ $shop->private_store_name }}</td>--}}
                                                                <td id="td_date">{{ $shop->created_at }}</td>
                                                                <td id="td_shopid">{{ $shop->store_id }}</td>
                                                                <td id="td_storename">{{ $shop->private_store_name }}</td>
                                                                <td id="td_statename">{{ $shop->state_name }}</td>
                                                                <td id="td_cityname">{{ $shop->city_name }}</td>
                                                                <td id="td_status"><button type="button" class="btn btn-primary">Inactive</button></td>
                                                                {{--<td>{{ $shop->status }}</td>--}}
                                                                {{--                                                                    <td>{{ $shop->private_address_line_1.', '.$shop->private_address_line_2.', '.$shop->private_address_line_3 }}</td>--}}
                                                                <td><img height="50" width="70" src="/images/shop_logos/{{$shop->logo }}"></td>
                                                                <td><img height="50" width="70" src="/images/shop_banners/{{$shop->banner }}"></td>
                                                                <td>{{ $shop->front_image_1 }}</td>
                                                                <td>{{ $shop->inner_image_1 }}</td>
                                                                <td><button type="button" class="btn btn-primary"><a href="#" class="text-white">Pick</a></button></td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                        <!--  <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr> -->
                                                        </tfoot>
                                                    </table>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-5">
                                                            {{ $shops->links() }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 table-responsive">
                                        <div class="card card-warning">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                                            <thead>
                                                            <tr role="row">
                                                                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Store Name</th>
                                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Shopkeeper Name</th>
                                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Contact No.</th>
                                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Address</th>
                                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Logo</th>
                                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Banner</th>
                                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Manage</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($shops as $shop)
                                                                @if($shop->logo=='' || $shop->banner=='')
                                                                    <tr role="row" class="odd">
                                                                        <td class="sorting_1">{{ $shop->private_store_name }}</td>
                                                                        <td>{{ $shop->private_person_name }}</td>
                                                                        <td>{{ $shop->private_number_1 }}</td>
                                                                        <td>{{ $shop->private_address_line_1.', '.$shop->private_address_line_2.', '.$shop->private_address_line_3 }}</td>
                                                                        <td><img height="50" width="70" src="/images/shop_logos/{{$shop->logo }}"></td>
                                                                        <td><img height="50" width="70" src="/images/shop_banners/{{$shop->banner }}"></td>
                                                                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#upload_logo_banner_{{ $shop->id }}">Upload</button>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="upload_logo_banner_{{ $shop->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                <div class="modal-dialog" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="exampleModalLabel">Upload Logo & Banner</h5>
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        {{--<h4>{{ $shop->id }}</h4>--}}
                                                                                        <form role="form" method="post" action="{{ Route('update-logo-banner.update-logo-banner',$shop->store_id) }}" enctype="multipart/form-data">
                                                                                            @csrf
                                                                                            <input type="hidden" value="{{ $shop->id }}">
                                                                                            <div class="modal-body">
                                                                                                <div style="margin-top:10px;">
                                                                                                    <label>Logo</label>
                                                                                                    <input type="file" name="logo" class="form-control">
                                                                                                </div>
                                                                                                <div style="margin-top:10px;">
                                                                                                    <label>Banner</label>
                                                                                                    <input type="file" name="banner" class="form-control">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- Modal -->
                                                                    </tr>
                                                                @else
                                                                    <tr role="row" class="odd">
                                                                        <td class="sorting_1">{{ $shop->private_store_name }}</td>
                                                                        <td>{{ $shop->private_person_name }}</td>
                                                                        <td>{{ $shop->private_number_1 }}</td>
                                                                        <td>{{ $shop->private_address_line_1.', '.$shop->private_address_line_2.', '.$shop->private_address_line_3 }}</td>
                                                                        <td><img height="50" width="70" src="/images/shop_logos/{{$shop->logo }}"></td>
                                                                        <td><img height="50" width="70" src="/images/shop_banners/{{$shop->banner }}"></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-success" disabled>Uploaded</button>
                                                                            @if($shop->design_issue_comments=='')
                                                                            @else
                                                                                <button type="button" class="btn btn-primary" data-toggle="modal" style="margin-top:10px;" data-target="#designer_issue_solve_{{ $shop->id }}">Issue</button>
                                                                            @endif
                                                                        </td>

                                                                        <!-- Modal -->
                                                                        <div class="modal fade" id="designer_issue_solve_{{ $shop->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="exampleModalLabel">Upload Logo & Banner</h5>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <form role="form" method="post" action="{{ Route('update-logo-banner.update-logo-banner',$shop->store_id) }}" enctype="multipart/form-data">
                                                                                        @csrf
                                                                                        <input type="hidden" value="{{ $shop->id }}">
                                                                                        <div class="modal-body">
                                                                                            <div style="margin-top:10px;">
                                                                                                <label>Manager's Comment</label>
                                                                                                <input type="text" value="{{ $shop->design_issue_comments }}" class="form-control" readonly>
                                                                                            </div>
                                                                                            <div style="margin-top:10px;">
                                                                                                <label>Logo</label>
                                                                                                <input type="file" name="logo" class="form-control">
                                                                                            </div>
                                                                                            <div style="margin-top:10px;">
                                                                                                <label>Banner</label>
                                                                                                <input type="file" name="banner" class="form-control">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Modal -->


                                                                        {{--<td><button type="button" class="btn btn-success" disabled><a href="#" class="text-white">Approved</a></button></td>--}}
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-5">
                                                                {{ $shops->links() }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                                    <div class="card card-warning">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                                        <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Store Name</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Shopkeeper Name</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Contact No.</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Address</th>
                                                            {{--<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Logo</th>--}}
                                                            {{--<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Banner</th>--}}
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">T n C</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Agreement</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Manage</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($shops as $shop)
                                                            @if($shop->physical_agreement=='' || $shop->term_condition=='')
                                                                {{--                                                            @if($shop->is_approved_by_designer==0 && $shop->term_condition=='')--}}
                                                                {{--                                                            @if($shop->term_condition=='' || $shop->web_logo=='' || $shop->app_logo=='' || $shop->web_banner_1=='' || $shop->app_banner_1=='')--}}
                                                                <tr role="row" class="odd">
                                                                    <td class="sorting_1">{{ $shop->private_store_name }}</td>
                                                                    <td>{{ $shop->private_person_name }}</td>
                                                                    <td>{{ $shop->private_number_1 }}</td>
                                                                    <td>{{ $shop->private_address_line_1.', '.$shop->private_address_line_2.', '.$shop->private_address_line_3 }}</td>
                                                                    <td>{{ $shop->term_condition }}</td>
                                                                    <td>{{ $shop->physical_agreement }}</td>
                                                                    {{--<td>{{ $shop->term_condition }}</td>--}}
                                                                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#upload_agreement_{{ $shop->id }}">Upload</button></td>
                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="upload_agreement_{{ $shop->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Upload Agreement</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                {{--<h4>{{ $shop->id }}</h4>--}}
                                                                                <form role="form" method="post" action="{{ Route('update-agreement.update-agreement',$shop->store_id) }}" enctype="multipart/form-data">
                                                                                    @csrf
                                                                                    <input type="hidden" value="{{ $shop->id }}">
                                                                                    <div class="modal-body">
                                                                                        <div style="margin-top:10px;">
                                                                                            <label>Upload Agreement</label>
                                                                                            <input type="file" name="physical_agreement" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" class="form-control">
                                                                                        </div>
                                                                                        <div style="margin-top:10px;">
                                                                                            <label>Upload TnC</label>
                                                                                            <input type="file" name="term_condition" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Modal -->
                                                                </tr>
                                                            @else
                                                                <tr role="row" class="odd">
                                                                    <td class="sorting_1">{{ $shop->private_store_name }}</td>
                                                                    <td>{{ $shop->private_person_name }}</td>
                                                                    <td>{{ $shop->private_number_1 }}</td>
                                                                    <td>{{ $shop->private_address_line_1.', '.$shop->private_address_line_2.', '.$shop->private_address_line_3 }}</td>
                                                                    {{--                                                                    <td>{{ $shop->web_logo."\n".$shop->app_logo }}</td>--}}
                                                                    {{--                                                                    <td>{{ $shop->web_banner_1.' '.$shop->app_banner_1 }}<img height="50" width="70" src="/images/shop_banners/{{$shop->web_banner_1}}"></td>--}}
                                                                    <td>{{ $shop->term_condition }}</td>
                                                                    <td>{{ $shop->physical_agreement }}</td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-success" disabled>Approved</button>
                                                                        @if($shop->content_issue_comments=='')
                                                                        @else
                                                                            <button type="button" class="btn btn-primary" data-toggle="modal" style="margin-top:10px;" data-target="#content_issue_solve_{{ $shop->id }}">Issue</button>
                                                                        @endif
                                                                    </td>

                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="content_issue_solve_{{ $shop->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Upload Agreement</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <form role="form" method="post" action="{{ Route('update-agreement.update-agreement',$shop->store_id) }}" enctype="multipart/form-data">
                                                                                    @csrf
                                                                                    <input type="hidden" value="{{ $shop->id }}">
                                                                                    <div class="modal-body">
                                                                                        <div style="margin-top:10px;">
                                                                                            <label>Manager's Comment</label>
                                                                                            <input type="text" value="{{ $shop->content_issue_comments }}" class="form-control" readonly>
                                                                                        </div>
                                                                                        <div style="margin-top:10px;">
                                                                                            <label>Upload Agreement</label>
                                                                                            <input type="file" name="physical_agreement" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" class="form-control">
                                                                                        </div>
                                                                                        <div style="margin-top:10px;">
                                                                                            <label>Upload TnC</label>
                                                                                            <input type="file" name="term_condition" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Modal -->

                                                                </tr>
                                                            @endif
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-5">
                                                            {{ $shops->links() }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                @endrole


            </div>
        </div>
    </div>
</div>



</section>
<aside class="control-sidebar control-sidebar-dark">
</aside>
@endsection

@section('scripts')

    <script>
        $(document).ready(function(){
            $("#input").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#example2 tbody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $("#shopid").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#example2 tbody tr #td_shopid").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $("#shopdate").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#example2 tbody tr #td_date").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $("#shopstorename").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#example2 tbody tr #td_storename").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $("#shopstate").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#example2 tbody tr #td_statename").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $("#shopcity").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#example2 tbody tr #td_cityname").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

@endsection