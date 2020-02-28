@extends('index')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>List Employee</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">List Employee</li>
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
                        <h3 class="card-title">List Employee</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                        <thead>
                                        <tr role="row">
                                            {{--<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Employee Type</th>--}}
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Employee Name</th>
                                            {{--<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Venue</th>--}}
                                            {{--<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Email</th>--}}
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Phone</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Manage</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($emp_list as $emp)
                                            {{--echo "<pre>";--}}
                                                {{--print_r($emp);--}}

                                        <tr role="row" class="odd">
                                            {{--<td class="sorting_1">{{ $emp->emp_type }}</td>--}}
                                            <td>{{ $emp->name }}</td>
                                            {{--<td>{{ $emp->venue }}</td>--}}
                                            {{--<td>{{ $emp->email }}</td>--}}
                                            <td>{{ $emp->phone_number }}</td>
                                            <td>
                                                {{--<button type="button" class="btn btn-primary"><a href="{{ Route('edit_emp.edit_emp') }}"><h6 class="text-white">Edit</h6></a></button>--}}
                                                {{--<button type="button" class="btn btn-primary"><a href="{{ url('edit-employee/'.$emp->id) }}"><h6 class="text-white">Edit</h6></a></button>--}}
                                                {{--<button type="button" class="btn btn-danger"><a href="{{ url('delete_emp/'.$emp->id) }}" id="delete_request"><h6 class="text-white">Delete</h6></a></button>--}}

                                                <a class="btn btn-primary" href="{{ url('edit-employee', $emp->id) }}">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')" href="{{ url('delete_emp', $emp->id) }}">
                                                    <i class="fa fa-trash"></i>
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
                                    {{ $emp_list->links() }}
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
