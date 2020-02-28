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
                <div class="col-md-12">
                    <div class="card card-warning card-primary card-tabs">
                        <div class="card-header p-0 pt-1">
                            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Location</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Basic Info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Images/Logo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Time</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-tnc-tab" data-toggle="pill" href="#custom-tabs-one-tnc" role="tab" aria-controls="custom-tabs-one-tnc" aria-selected="false">T & C</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-keywords-tab" data-toggle="pill" href="#custom-tabs-one-keywords" role="tab" aria-controls="custom-tabs-one-keywords" aria-selected="false">Keywords</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-agreement-tab" data-toggle="pill" href="#custom-tabs-one-agreement" role="tab" aria-controls="custom-tabs-one-agreement" aria-selected="false">Agreement</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <form role="form" method="post" action="{{ Route('emp-details.emp-details')  }}">
                                @csrf
                            <div class="tab-content" id="custom-tabs-one-tabContent">
                                <div class="tab-pane fade active show" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                    <div class="card card-warning">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Country</label>
                                                        <select name="country" id="country" class="form-control">
                                                            <option value="">--Select Country--</option>
                                                            @foreach($country_master as $key => $country)
                                                                <option value="{{$key}}"> {{$country}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>State</label>
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
                                        <div class="card card-warning">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Business Name</label>
                                                            <input type="text" name="business_name" class="form-control" placeholder="Enter Your Business Name...">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Business Number</label>
                                                            <input type="text" name="business_number" class="form-control" placeholder="Enter Your Business Number...">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Shopkeeper Name</label>
                                                            <input type="text" name="shopkeeper_name" class="form-control" placeholder="Enter Shopkeeper Name...">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Shopkeeper Mobile Number 1</label>
                                                            <input type="text" name="shopkeeper_phone_no1" class="form-control" placeholder="Enter Shopkeeper Mobile No. 1...">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Shopkeeper Mobile Number 2</label>
                                                            <input type="text" name="shopkeeper_phone_no2" class="form-control" placeholder="Enter Shopkeeper Mobile No. 2...">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Email Address</label>
                                                            <input type="text" name="email" class="form-control" placeholder="Enter Your Email...">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Comments</label>
                                                            <input type="text" name="comments" class="form-control" placeholder="Enter Your Comments...">
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
                                                    <div class="form-group">
                                                        <label>Logo</label>
                                                        <input type="file" name="logo" class="form-control" placeholder="Upload Your Business Logo...">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Banner</label>
                                                        <input type="file" name="banner" class="form-control" placeholder="Upload Your Business Banner...">
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
                                                    <div class="form-group">
                                                        <label>Shop Opening Time</label>
                                                        <input type="text" name="shop_open_time" class="form-control" placeholder="Enter Shop Opening Time...">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Shop Closing Time</label>
                                                        <input type="text" name="shop_close_time" class="form-control" placeholder="Enter Shop Closing Time...">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Shop Open Days</label><br>
                                                        <input type="checkbox" name="sun" class=""> &nbsp;Sunday &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <input type="checkbox" name="mon" class=""> &nbsp;Monday &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <input type="checkbox" name="tue" class=""> &nbsp;Tuesday &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <input type="checkbox" name="wed" class=""> &nbsp;Wednesday &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <input type="checkbox" name="thu" class=""> &nbsp;Thursday &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <input type="checkbox" name="fri" class=""> &nbsp;Friday &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <input type="checkbox" name="sat" class=""> &nbsp;Saturday &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="custom-tabs-one-tnc" role="tabpanel" aria-labelledby="custom-tabs-one-tnc-tab">
                                    <div class="col-sm-12">
                                        <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Month</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Total</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Cash</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Cash</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Printed</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Cleared</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">GGGG</td>
                                                <td>Firefox 1.0</td>
                                                <td>Firefox 1.0</td>
                                                <td>Firefox 1.0</td>
                                                <td>Firefox 1.0</td>
                                                <td>Firefox 1.0</td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <!--  <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr> -->
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="custom-tabs-one-keywords" role="tabpanel" aria-labelledby="custom-tabs-one-keywords-tab">
                                    <div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Month</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Total</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Cash</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Cash</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Printed</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Cleared</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Gecko</td>
                                                <td>Keyword 1</td>
                                                <td>Keyword 2</td>
                                                <td>Keyword 3</td>
                                                <td>Keyword 4</td>
                                                <td>Keyword 5</td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <!--  <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr> -->
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="custom-tabs-one-agreement" role="tabpanel" aria-labelledby="custom-tabs-one-agreement-tab">
                                    <div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Month</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Total</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Cash</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Cash</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Printed</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Cleared</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Agreement</td>
                                                <td>Agreement1</td>
                                                <td>Agreement2</td>
                                                <td>Agreement3</td>
                                                <td>Agreement4</td>
                                                <td>Agreement5</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                      </div>
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
    <script type="text/javascript">
        $('#country').on('change',function(){
            var countryID = $(this).val();
            if(countryID){
                $.ajax({
                    type:"GET",
                    url:"{{url('get-state-list')}}?country_id="+countryID,
                    success:function(res){
                        if(res){
                            $("#state").empty();
                            $("#state").append('<option>Select</option>');
                            $.each(res,function(key,value){
                                $("#state").append('<option value="'+key+'">'+value+'</option>');
                            });

                        }else{
                            $("#state").empty();
                        }
                    }
                });
            }else{
                $("#state").empty();
                $("#city").empty();
            }
        });

        $('#state').on('change',function(){
            var stateID = $(this).val();
            if(stateID){
                $.ajax({
                    type:"GET",
                    url:"{{url('get-city-list')}}?state_id="+stateID,
                    success:function(res){
                        if(res){
                            $("#city").empty();
                            $.each(res,function(key,value){
                                $("#city").append('<option value="'+key+'">'+value+'</option>');
                            });

                        }else{
                            $("#city").empty();
                        }
                    }
                });
            }else{
                $("#city").empty();
            }

        });
    </script>
@endsection