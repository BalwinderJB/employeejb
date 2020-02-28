@extends('index')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>List Store</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">App Installed Store List</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card card-warning">
                    <div class="card-header sidebar-dark-primary elevation-4">
                        <h3 class="card-title">App Installed Store List</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Store Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Owner Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Owner E-Mail</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Phone No.</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Phone No. 2</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Address</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Manage</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($particular_state_wise_apps_detail as $parti_state_data)
                                            <tr role="row" class="odd">
                                                <td>{{ $parti_state_data->private_store_name }}</td>
                                                <td>{{ $parti_state_data->private_person_name }}</td>
                                                <td>{{ $parti_state_data->private_person_email }}</td>
                                                <td>{{ $parti_state_data->private_number_1 }}</td>
                                                <td>{{ $parti_state_data->private_number_2 }}</td>
                                                <td>{{ $parti_state_data->private_address_line_1.' '.$parti_state_data->private_address_line_2.' '.$parti_state_data->private_address_line_3 }}</td>
                                                <td>
                                                    <a class="btn btn-primary" href="{{ url('viewfull-store-data', $parti_state_data->id) }}">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </td>
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
                                <div class="col-sm-12 col-md-5">
                                    {{ $particular_state_wise_apps_detail->links() }}
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->


                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection
