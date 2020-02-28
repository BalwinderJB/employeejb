@extends('index')
@section('content')

        <!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Add Traveling Expenses</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Add Traveling Expenses</li>
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
                <div class="">
                    <!-- general form elements disabled -->

                    @if(!empty($data))
                        <div class="card card-warning">
                            <div class="card-header sidebar-dark-primary elevation-4">
                                <h3 class="card-title">Edit Traveling Expenses</h3>
                            </div>
                            <!-- /.card-header -->

                            @foreach($data as $datas)
                                <form role="form" method="POST" action="{{ url('update-travel-expenses',[$datas->id]) }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Employee</label>
                                                    <select name="emp_id" class="form-control">
                                                        <option value="">--Select Employee--</option>
                                                        <option value="1">ABC</option>
                                                        <option value="2">DEF</option>
                                                        <option value="3">GHI</option>
                                                        {{--@foreach($emp_emp_type as $key => $emp_type)--}}
                                                        {{--<option value="{{$key}}">{{$emp_type}}</option>--}}
                                                        {{--@endforeach--}}
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Date</label>
                                                    <input type="date" name="date" value="{{ $datas->date }}" class="form-control" placeholder="Enter Date">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Amount</label>
                                                    <input type="text" name="amount" value="{{ $datas->amount }}" class="form-control" placeholder="Enter Amount">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Comments</label>
                                                    <input type="text" name="comments" value="{{ $datas->comments }}" class="form-control" placeholder="Enter Comments">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Image</label>
                                                    <img height="50" width="70" src="/images/travel/{{$datas->image}}">
                                                    <input type="file" name="image" value="{{ $datas->image }}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            @endforeach
                        </div>
                    @else
                        <div class="card card-warning">
                            <div class="card-header sidebar-dark-primary elevation-4">
                                <h3 class="card-title">Add Travel Expenses</h3>
                            </div>
                            <!-- /.card-header -->
                            <form role="form" method="POST" action="{{ url('travel-expenses-add') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Employee</label>
                                                <select name="emp_id" class="form-control">
                                                    <option value="">--Select Employee--</option>
                                                    <option value="1">ABC</option>
                                                    <option value="2">DEF</option>
                                                    <option value="3">GHI</option>
                                                    {{--@foreach($emp_emp_type as $key => $emp_type)--}}
                                                        {{--<option value="{{$key}}">{{$emp_type}}</option>--}}
                                                    {{--@endforeach--}}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input type="date" name="date" class="form-control" placeholder="Enter Date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Amount</label>
                                                <input type="text" name="amount" class="form-control" placeholder="Enter Amount">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Comments</label>
                                                <input type="text" name="comments" class="form-control" placeholder="Enter Comments">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Image</label>
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                    @endif

                </div>
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card card-warning">
                    <div class="card-header sidebar-dark-primary elevation-4">
                        <h3 class="card-title">List</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"></div>
                                <div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12">
                                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Employee ID</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Date</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Amount</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Comments</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Image</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Manage</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($travel as $trav)
                                            <tr>
                                                <td class="sorting_1">{{  $trav->emp_id }}</td>
                                                <td class="sorting_1">{{  $trav->date }}</td>
                                                <td class="sorting_1">{{  $trav->amount }}</td>
                                                <td class="sorting_1">{{  $trav->comments }}</td>
                                                <td class="sorting_1"><img height="50" width="70" src="/images/travel/{{$trav->image}}"></td>
                                                <td>
                                                    <a class="btn btn-primary" href="{{ url('update-travel-expenses-view', $trav->id) }}">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')" href="{{ url('delete-travel-expenses', $trav->id) }}">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>


@endsection
