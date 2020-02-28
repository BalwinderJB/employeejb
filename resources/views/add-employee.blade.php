@extends('index')
@section('content')

        <!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Add Employee</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Add Employee</li>
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
                    <!-- general form elements disabled -->
                    <div class="card card-warning">
                        <div class="card-header sidebar-dark-primary elevation-4">
                            <h3 class="card-title">Basic Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form role="form" method="post" action="{{ Route('emp-details.emp-details')  }}">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Employee Type</label>
                                            <select name="user_type" id="emp_type" class="form-control">
                                                <option value="">--Select Employee Type--</option>
                                                @foreach($emp_emp_type as $key => $emp_type)
                                                    <option value="{{$key}}">{{$emp_type}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>Employee ID</label>
                                            <input type="text" name="employeejb_working_hours" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>Working Hours</label>
                                            <input type="text" name="employeejb_working_hours" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <label>Holidays</label>
                                            <input type="text" name="employeejb_no_of_holidays" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <label>Promocode</label>
                                            <input type="text" name="employeejb_promo_code" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Employee Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Phone1</label>
                                            <input type="text" name="phone_number" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Phone2</label>
                                            <input type="text" name="employeejb_phone2" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>File No.</label>
                                            <input type="text" name="employeejb_file_no" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>Venue</label>
                                            <select name="employeejb_venue" class="form-control">
                                                <option value="">--Select Venue--</option>
                                                @foreach($venue_venue as $key => $venue)
                                                    <option value="{{$key}}">{{$venue}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Team Leader</label>
                                            <input type="checkbox" name="promotional_link" class="form-control" placeholder="offers.clubjb.com/">
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Promotional Link</label>
                                            <input type="text" name="employeejb_team_lead" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Stiphend</label>
                                            <input type="text" name="employeejb_team_lead" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Bonus</label>
                                            <input type="text" name="employeejb_team_lead" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Training Days</label>
                                            <input type="text" name="employeejb_team_lead" class="form-control" value="7">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Training Business Target</label>
                                            <input type="text" name="employeejb_team_lead" class="form-control" value="10000">
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="card card-warning">
                        <div class="card-header sidebar-dark-primary elevation-4">
                            <h3 class="card-title">Management Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Team Leader</label>
                                            <select name="employeejb_team_leader" class="form-control">
                                                <option value="option1">option 1</option>
                                                <option value="option2">option 2</option>
                                                <option value="option3">option 3</option>
                                                <option value="option4">option 4</option>
                                                <option value="option5">option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Retailer</label>
                                            <select name="employeejb_retailer" class="form-control">
                                                <option value="option1">option 1</option>
                                                <option value="option2">option 2</option>
                                                <option value="option3">option 3</option>
                                                <option value="option4">option 4</option>
                                                <option value="option5">option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Dealer</label>
                                            <select name="employeejb_dealer" class="form-control">
                                                <option value="option1">option 1</option>
                                                <option value="option2">option 2</option>
                                                <option value="option3">option 3</option>
                                                <option value="option4">option 4</option>
                                                <option value="option5">option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>HR</label>
                                            <select name="employeejb_hr" class="form-control">
                                                <option value="">--Select HR--</option>
                                                @foreach($hr as $key => $hr_name)
                                                    <option value="{{$key}}">{{$hr_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        {{--<div class="card-footer">--}}
                        {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                        {{--</div>--}}

                    </div>
                    <!-- /.card-body -->

                    <div class="card card-warning">
                        <div class="card-header sidebar-dark-primary elevation-4">
                            <h3 class="card-title">Location</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            {{--<form role="form">--}}
                                <div class="row">
                                    <div class="col-sm-4">
                                        <!-- text input -->
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
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>State</label>
                                            {{--<select name="state" id="state" class="form-control dynamic" data-dependent="city">--}}
                                            <select name="state" id="state" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>City</label>
                                            <select name="city" id="city" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    {{--<div class="col-sm-3">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label>Venue</label>--}}
                                            {{--<select name="employeejb_venue" class="form-control">--}}
                                                {{--<option value="">--Select Venue--</option>--}}
                                                {{--@foreach($venue_venue as $key => $venue)--}}
                                                    {{--<option value="{{$key}}">{{$venue}}</option>--}}
                                                {{--@endforeach--}}
                                            {{--</select>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                </div>
                        </div>
                        {{--<div class="card-footer">--}}
                        {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                        {{--</div>--}}


                        {{--</form>--}}
                    </div>
                    <!-- /.card-body -->

                    <div class="card card-warning">
                        <div class="card-header sidebar-dark-primary elevation-4">
                            <h3 class="card-title">Salary Target</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            {{--<form role="form">--}}
                                <div class="row">
                                    <div class="col-sm-3" id="basic_venue">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Basic Venue</label>
                                            <input type="text" name="employeejb_basic_venue" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-3" id="basic_venue">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Gross</label>
                                            <input type="text" name="employeejb_basic_venue" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-3" id="emp_bdm">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>BDM</label>
                                            <input type="text" name="employeejb_bdm" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-3" id="basic_venue">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Gross</label>
                                            <input type="text" name="employeejb_basic_venue" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6" id="free_app_target_venue">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Free App Target Venue</label>
                                            <input type="text" name="employeejb_free_app_target_venue" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6" id="free_shop_target_bdm">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Free Shop Target BDM</label>
                                            <input type="text" name="employeejb_free_shop_target_bdm" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6" id="paid_app_target_venue">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Paid App Target Venue</label>
                                            <input type="text" name="employeejb_paid_app_target_venue" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6" id="paid_shop_target_bdm">
                                        <!-- text input -->

                                            <label>Paid Banner Shop Target BDM</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="employeejb_paid_shop_target_bdm" class="form-control" placeholder="No. of store">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="employeejb_paid_shop_target_bdm" class="form-control" placeholder="Business">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>

                                    <div class="col-sm-6" id="paid_app_target_venue_transaction">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Paid App Target Venue Transaction</label>
                                            <input type="text" name="employeejb_paid_app_target_venue_transaction" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6" id="paid_app_bdm_transaction">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Paid App BDM Transaction</label>
                                            <input type="text" name="employeejb_paid_app_bdm_transaction" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>

                                </div>
                        </div>
                        {{--<div class="card-footer">--}}
                        {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                        {{--</div>--}}
                        {{--</form>--}}
                    </div>

                    <div class="card card-warning">
                        <div class="card-header sidebar-dark-primary elevation-4">
                            <h3 class="card-title">Target Bonus</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            {{--<form role="form">--}}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Paid App Target</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" name="employeejb_target_bonus_basic_venue_target" class="form-control" placeholder="Target">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="employeejb_target_bonus_basic_venue_bonus" class="form-control" placeholder="Bonus">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Paid Business Target (BDM)</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" name="employeejb_target_bonus_bdm_target" class="form-control" placeholder="Target">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="employeejb_target_bonus_bdm_bonus" class="form-control" placeholder="Bonus">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- text input -->
                                            @foreach($targ_bon as $targ)
                                            <div class="form-group">
                                                <label>Basic Venue</label>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" value="{{$targ->target_bonus_basic_venue_target}}" readonly placeholder="Target">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" value="{{$targ->target_bonus_basic_venue_bonus}}" readonly placeholder="Bonus">
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>

                                        <div class="col-sm-6">
                                            @foreach($targ_bon_bdm as $tarbdm)
                                            <div class="form-group">
                                                <label>BDM</label>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" value="{{$tarbdm->target_bonus_bdm_target}}" readonly placeholder="Target">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" value="{{$tarbdm->target_bonus_bdm_bonus}}" readonly placeholder="Bonus">
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>

                        </div>
                        {{--<div class="card-footer">--}}
                        {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                        {{--</div>--}}
                        {{--</form>--}}
                    </div>

                    <div class="card card-warning">
                        <div class="card-header sidebar-dark-primary elevation-4">
                            <h3 class="card-title">Spot Bonus</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            {{--<form role="form">--}}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Venue</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" name="employeejb_spot_bonus_basic_venue_target" class="form-control" placeholder="Target">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="employeejb_spot_bonus_basic_venue_bonus" class="form-control" placeholder="Bonus">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>BDM</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" name="employeejb_spot_bonus_bdm_target" class="form-control" placeholder="Target">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="employeejb_spot_bonus_bdm_bonus" class="form-control" placeholder="Bonus">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- text input -->
                                            @foreach($spot_bon as $spot)
                                            <div class="form-group">
                                                <label>Basic Venue</label>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" value="{{$spot->spot_bonus_basic_venue_target}}" readonly placeholder="Target">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" value="{{$spot->spot_bonus_basic_venue_bonus}}" readonly placeholder="Bonus">
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>

                                        <div class="col-sm-6">
                                            @foreach($spot_bon_bdm as $spot_bdm)
                                            <div class="form-group">
                                                <label>BDM</label>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" value="{{$spot_bdm->spot_bonus_bdm_target}}" readonly placeholder="Target">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" value="{{$spot_bdm->spot_bonus_bdm_bonus}}" readonly placeholder="Bonus">
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>


                        </form>
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

    <script type="text/javascript">
        $('#emp_type').on('change',function(){
            var value = $('#emp_type').val();

            if(value==1){
                $.ajax({
                    success:function(res){
                        if(res){
                            $("#emp_bdm").empty(); $("#free_shop_target_bdm").empty(); $("#paid_shop_target_bdm").empty(); $("#paid_app_bdm_transaction").empty();

                            $("#emp_bdm").html('<div class="form-group"><label>BDM</label><input type="text" name="bdm" class="form-control" placeholder="Enter ..." disabled></div>');
                            $("#free_shop_target_bdm").html('<div class="form-group"><label>Free Shop Target BDM</label><input type="text" name="free_shop_target_bdm" class="form-control" placeholder="Enter ..." disabled></div>');
                            $("#paid_shop_target_bdm").html('<div class="form-group"><label>Paid Shop Target BDM</label><input type="text" name="paid_shop_target_bdm" class="form-control" placeholder="Enter ..." disabled></div>');
                            $("#paid_app_bdm_transaction").html('<div class="form-group"><label>Paid App BDM Transaction</label><input type="text" name="paid_app_bdm_transaction" class="form-control" placeholder="Enter ..." disabled></div>');

                        }
                    }
                });
            }else{
                $("#basic_venue").empty(); $("#free_app_target_venue").empty(); $("#paid_app_target_venue").empty(); $("#paid_app_target_venue_transaction").empty();


                $("#basic_venue").html('<div class="form-group"><label>Basic Venue</label><input type="text" name="basic_venue" class="form-control" placeholder="Enter ..." disabled></div>');
                $("#free_app_target_venue").html('<div class="form-group"><label>Free App Target Venue</label><input type="text" name="free_app_target_venue" class="form-control" placeholder="Enter ..." disabled></div>');
                $("#paid_app_target_venue").html('<div class="form-group"><label>Paid App Target Venue</label><input type="text" name="paid_app_target_venue" class="form-control" placeholder="Enter ..." disabled></div>');
                $("#paid_app_target_venue_transaction").html('<div class="form-group"><label>Paid App Target Venue Transaction</label><input type="text" name="paid_app_target_venue_transaction" class="form-control" placeholder="Enter ..." disabled></div>');

            }

//            alert("Hii this is onchange function of emp type.");

//            if(value==1) {
////                $("#emp_bdm").empty(); $("#free_shop_target_bdm").empty(); $("#paid_shop_target_bdm").empty(); $("#paid_app_bdm_transaction").empty();
////                $("#basic_venue").empty(); $("#free_app_target_venue").empty(); $("#paid_app_target_venue").empty(); $("#paid_app_target_venue_transaction").empty();
//
//                $("#emp_bdm").html('<div class="form-group"><label>BDM</label><input type="text" name="bdm" class="form-control" placeholder="Enter ..." disabled></div>');
//                $("#free_shop_target_bdm").html('<div class="form-group"><label>Free Shop Target BDM</label><input type="text" name="free_shop_target_bdm" class="form-control" placeholder="Enter ..." disabled></div>');
//                $("#paid_shop_target_bdm").html('<div class="form-group"><label>Paid Shop Target BDM</label><input type="text" name="paid_shop_target_bdm" class="form-control" placeholder="Enter ..." disabled></div>');
//                $("#paid_app_bdm_transaction").html('<div class="form-group"><label>Paid App BDM Transaction</label><input type="text" name="paid_app_bdm_transaction" class="form-control" placeholder="Enter ..." disabled></div>');
//            }
//            else
//            {
////                $("#emp_bdm").empty(); $("#free_shop_target_bdm").empty(); $("#paid_shop_target_bdm").empty(); $("#paid_app_bdm_transaction").empty();
////                $("#basic_venue").empty(); $("#free_app_target_venue").empty(); $("#paid_app_target_venue").empty(); $("#paid_app_target_venue_transaction").empty();
//
//                $("#basic_venue").html('<div class="form-group"><label>Basic Venue</label><input type="text" name="basic_venue" class="form-control" placeholder="Enter ..." disabled></div>');
//                $("#free_app_target_venue").html('<div class="form-group"><label>Free App Target Venue</label><input type="text" name="free_app_target_venue" class="form-control" placeholder="Enter ..." disabled></div>');
//                $("#paid_app_target_venue").html('<div class="form-group"><label>Paid App Target Venue</label><input type="text" name="paid_app_target_venue" class="form-control" placeholder="Enter ..." disabled></div>');
//                $("#paid_app_target_venue_transaction").html('<div class="form-group"><label>Paid App Target Venue Transaction</label><input type="text" name="paid_app_target_venue_transaction" class="form-control" placeholder="Enter ..." disabled></div>');
//            }

        });
    </script>
@endsection




















