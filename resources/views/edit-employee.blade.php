@extends('index')
@section('content')

        <!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Employee</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Edit Employee</li>
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
                            @foreach($data as $data)
                            <form role="form" method="post" action="{{ Route('employee-update.employee-update',[$data->id])  }}">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Employee Type</label>
                                            <select name="emp_type" class="form-control">
                                                <option value="{{$data->emp_type}}">{{$data->emp_type}}</option>
                                                <option value="option2">option 2</option>
                                                <option value="option3">option 3</option>
                                                <option value="option4">option 4</option>
                                                <option value="option5">option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>Working Hours</label>
                                            <input type="text" name="working_hours" value="{{$data->working_hours}}" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>Number of holidays</label>
                                            <input type="text" name="no_of_holidays" value="{{$data->no_of_holidays}}" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>Promocode</label>
                                            <input type="text" name="promo_code" value="{{$data->promo_code}}" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Employee Name</label>
                                            <input type="text" name="name" value="{{$data->name}}" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" name="phone" value="{{$data->phone}}" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" name="phone2" value="{{$data->phone2}}" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" value="{{$data->email}}" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>File No.</label>
                                            <input type="text" name="file_no" value="{{$data->file_no}}" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>

                                    <div class="">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Team Leader</label>
                                            <input type="checkbox" name="is_team_lead" value="{{$data->is_team_lead}}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        {{--<div class="card-footer">--}}
                        {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                        {{--</div>--}}

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
                                        <select name="team_leader" class="form-control">
                                            <option value="{{$data->team_leader}}">{{$data->team_leader}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Retailer</label>
                                        <select name="retailer" class="form-control">
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
                                        <label>Dealer</label>
                                        <select name="dealer" class="form-control">
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
                                        <select name="hr" class="form-control">
                                            <option value="{{$data->hr}}">{{$data->hr}}</option>
                                            <option value="option2">option 2</option>
                                            <option value="option3">option 3</option>
                                            <option value="option4">option 4</option>
                                            <option value="option5">option 5</option>
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
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Country</label>
                                        <select name="country" id="country" class="form-control">
                                            <option value="{{$data->country}}">{{$data->country}}</option>
                                            @foreach($country_master as $key => $country)
                                                <option value="{{$key}}"> {{$country}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>State</label>
                                        <select name="state" id="state" class="form-control">
                                            <option value="{{$data->state}}">{{$data->state}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>City</label>
                                        <select name="city" id="city" class="form-control">
                                            <option value="{{$data->city}}">{{$data->city}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Venue</label>
                                        <select name="venue" class="form-control">
                                            <option value="{{$data->venue}}">{{$data->venue}}</option>
                                            <option value="option2">option 2</option>
                                            <option value="option3">option 3</option>
                                            <option value="option4">option 4</option>
                                            <option value="option5">option 5</option>
                                        </select>
                                    </div>
                                </div>
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
                            <h3 class="card-title">Salary</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            {{--<form role="form">--}}
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Basic Venue</label>
                                        <input type="text" name="basic_venue" value="{{$data->basic_venue}}" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>BDM</label>
                                        <input type="text" name="bdm" value="{{$data->bdm}}" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Free App Target Venue</label>
                                        <input type="text" name="free_app_target_venue" value="{{$data->free_app_target_venue}}" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Free Shop Target BDM</label>
                                        <input type="text" name="free_shop_target_bdm" value="{{$data->free_shop_target_bdm}}" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Paid App Target Venue</label>
                                        <input type="text" name="paid_app_target_venue" value="{{$data->paid_app_target_venue}}" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Paid Shop Target BDM</label>
                                        <input type="text" name="paid_shop_target_bdm" value="{{$data->paid_shop_target_bdm}}" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                <!-- text input -->
                                    <div class="form-group">
                                        <label>Paid App Target Venue Transaction</label>
                                        <input type="text" name="paid_app_target_venue_transaction" value="{{$data->paid_app_target_venue_transaction}}" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Paid App BDM Transaction</label>
                                        <input type="text" name="paid_app_bdm_transaction" value="{{$data->paid_app_bdm_transaction}}" class="form-control" placeholder="Enter ...">
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
                                        <label>Basic Venue</label>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" name="target_bonus_basic_venue_target" value="{{$data->target_bonus_basic_venue_target}}" class="form-control" placeholder="Target">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="target_bonus_basic_venue_bonus" value="{{$data->target_bonus_basic_venue_bonus}}" class="form-control" placeholder="Bonus">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>BDM</label>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" name="target_bonus_bdm_target" value="{{$data->target_bonus_bdm_target}}" class="form-control" placeholder="Target">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="target_bonus_bdm_bonus" value="{{$data->target_bonus_bdm_bonus}}" class="form-control" placeholder="Bonus">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            @foreach($targ_bon as $targ)
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
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
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>BDM</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" value="{{$targ->target_bonus_bdm_target}}" readonly placeholder="Target">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" value="{{$targ->target_bonus_bdm_bonus}}" readonly placeholder="Bonus">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
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
                                        <label>Basic Venue</label>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" name="spot_bonus_basic_venue_target" value="{{$data->spot_bonus_basic_venue_target}}" class="form-control" placeholder="Target">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="spot_bonus_basic_venue_bonus" value="{{$data->spot_bonus_basic_venue_bonus}}" class="form-control" placeholder="Bonus">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>BDM</label>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" name="spot_bonus_bdm_target" value="{{$data->spot_bonus_bdm_target}}" class="form-control" placeholder="Target">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="spot_bonus_bdm_bonus" value="{{$data->spot_bonus_bdm_bonus}}" class="form-control" placeholder="Bonus">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @foreach($spot_bon as $spot)
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
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
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>BDM</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" value="{{$spot->spot_bonus_bdm_target}}" readonly placeholder="Target">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" value="{{$spot->spot_bonus_bdm_bonus}}" readonly placeholder="Bonus">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                        </form> @endforeach
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

{{--@section('scripts')--}}
    {{--<script type="text/javascript">--}}
        {{--$('#country').on('change',function(){--}}
            {{--alert("Hii.. This is Edit Employee Ajax Call.");--}}
            {{--var countryID = $(this).val();--}}
            {{--if(countryID){--}}
                {{--$.ajax({--}}
                    {{--type:"GET",--}}
                    {{--url:"{{url('get-state-list')}}?country_id="+countryID,--}}
                    {{--success:function(res){--}}
                        {{--if(res){--}}
                            {{--$("#state").empty();--}}
                            {{--$("#state").append('<option>Select</option>');--}}
                            {{--$.each(res,function(key,value){--}}
                                {{--$("#state").append('<option value="'+key+'">'+value+'</option>');--}}
                            {{--});--}}

                        {{--}else{--}}
                            {{--$("#state").empty();--}}
                        {{--}--}}
                    {{--}--}}
                {{--});--}}
            {{--}else{--}}
                {{--$("#state").empty();--}}
                {{--$("#city").empty();--}}
            {{--}--}}
        {{--});--}}

        {{--$('#state').on('change',function(){--}}
            {{--var stateID = $(this).val();--}}
            {{--if(stateID){--}}
                {{--$.ajax({--}}
                    {{--type:"GET",--}}
                    {{--url:"{{url('get-city-list')}}?state_id="+stateID,--}}
                    {{--success:function(res){--}}
                        {{--if(res){--}}
                            {{--$("#city").empty();--}}
                            {{--$.each(res,function(key,value){--}}
                                {{--$("#city").append('<option value="'+key+'">'+value+'</option>');--}}
                            {{--});--}}

                        {{--}else{--}}
                            {{--$("#city").empty();--}}
                        {{--}--}}
                    {{--}--}}
                {{--});--}}
            {{--}else{--}}
                {{--$("#city").empty();--}}
            {{--}--}}

        {{--});--}}
    {{--</script>--}}
{{--@endsection--}}








