@extends('index')
@section('content')

        <!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Spot BDM Bonus</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Spot BDM Bonus</li>
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
                                <h3 class="card-title">Edit Spot BDM Bonus</h3>
                            </div>
                            <!-- /.card-header -->

                            @foreach($data as $datas)
                                <form role="form" method="POST" action="{{ url('update-spotbdm',[$datas->id]) }}">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>BDM Target</label>
                                                    <input type="text" name="spot_bonus_bdm_target" value="{{ $datas->spot_bonus_bdm_target }}" class="form-control" placeholder="BDM Target">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>BDM Bonus</label>
                                                    <input type="text" name="spot_bonus_bdm_bonus" value="{{ $datas->spot_bonus_bdm_bonus }}" class="form-control" placeholder="BDM Bonus">
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
                                <h3 class="card-title">Add BDM Target</h3>
                            </div>
                            <!-- /.card-header -->
                            <form role="form" method="POST" action="{{ url('bdm-spot-add') }}">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>BDM Target</label>
                                                <input type="text" name="spot_bonus_bdm_target" class="form-control" placeholder="BDM Target">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>BDM Bonus</label>
                                                <input type="text" name="spot_bonus_bdm_bonus" class="form-control" placeholder="BDM Bonus">
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
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Target</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Bonus</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Manage</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($spot as $spo)
                                            <tr>
                                                <td class="sorting_1">{{  $spo->spot_bonus_bdm_target }}</td>
                                                <td class="sorting_1">{{ $spo->spot_bonus_bdm_bonus }}</td>
                                                <td>
                                                    <a class="btn btn-primary" href="{{ url('update-spotbdm-view', $spo->id) }}">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')" href="{{ url('delete-spot-bdm', $spo->id) }}">
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
