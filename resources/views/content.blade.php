
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
@csrf
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
                        <div class="card-header">
                            <h3 class="card-title">Basic Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form role="form">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Employee Type</label>
                                            <select class="form-control">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>Working Hours</label>
                                            <input type="text" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>Number of holidays</label>
                                            <input type="text" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>Promocode</label>
                                            <input type="text" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Employee Name</label>
                                            <input type="text" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Phone Number 2</label>
                                            <input type="text" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        {{--<div class="card-footer">--}}
                            {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                        {{--</div>--}}


                        </form>
                    </div>

                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Location</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form role="form">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Team Leader</label>
                                            <select class="form-control">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>HR</label>
                                            <select class="form-control">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Country</label>
                                            <select class="form-control">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>State</label>
                                            <select class="form-control">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>City</label>
                                            <select class="form-control">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Venue</label>
                                            <select class="form-control">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        {{--<div class="card-footer">--}}
                            {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                        {{--</div>--}}


                        </form>
                    </div>
                    <!-- /.card-body -->

                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Salary</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form role="form">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Basic Venue</label>
                                            <input type="text" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>BDM</label>
                                            <input type="text" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Free App Target Venue</label>
                                            <input type="text" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Free Shop Target BDM</label>
                                            <input type="text" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Paid App Target Venue</label>
                                            <input type="text" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Paid Shop Target BDM</label>
                                            <input type="text" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>

                                </div>
                        </div>
                        {{--<div class="card-footer">--}}
                            {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                        {{--</div>--}}


                        </form>
                    </div>

                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Target Bonus</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form role="form">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Basic Venue</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Target">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Bonus">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>BDM</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Target">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Bonus">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Basic Venue</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Target">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Bonus">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>BDM</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Target">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Bonus">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Basic Venue</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Target">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Bonus">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>BDM</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Target">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Bonus">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Basic Venue</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Target">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Bonus">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>BDM</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Target">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Bonus">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        {{--<div class="card-footer">--}}
                            {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                        {{--</div>--}}


                        </form>
                    </div>

                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Spot Bonus</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form role="form">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Basic Venue</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Target">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Bonus">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>BDM</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Target">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Bonus">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Basic Venue</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Target">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Bonus">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>BDM</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Target">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Bonus">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Basic Venue</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Target">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Bonus">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>BDM</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Target">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Bonus">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Basic Venue</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Target">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Bonus">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>BDM</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Target">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Bonus">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Basic Venue</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Target">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Bonus">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>BDM</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Target">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Bonus">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Basic Venue</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Target">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Bonus">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>BDM</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Target">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Bonus">
                                                </div>
                                            </div>
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

