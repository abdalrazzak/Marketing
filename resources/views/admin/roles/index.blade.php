@extends('admin.layouts.master')
@section('style')
    <link rel="stylesheet" href="{{ URL::asset('admin/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('page-header')
    <section class="content-header">
        <h1>
            Roles
            <a href="{!! route('admin.role.create') !!}" class="btn btn-primary btn-sm">
                <i class="fa fa-plus"></i>
                Create Role
            </a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! route('admin.dashboard.index') !!}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Roles</li>
        </ol>
    </section>
@endsection
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <table id="role-table" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>created at</th>
                                <th>updated at</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{!! $role->name !!}</td>
                                    <td>{!! $role->created_at !!}</td>
                                    <td>{!! $role->updated_at !!}</td>
                                    <td>
                                        <a href="{!! route('admin.role.edit', [$role->id]) !!}">
                                            <i class="fa fa-edit"></i>
                                            Edit
                                        </a>
                                        <a href="{!! route('admin.role.delete', [$role->id]) !!}" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>created at</th>
                                <th>updated at</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <!-- DataTables -->
    <script src="{!! URL::asset('admin/plugins/datatables.net/js/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! URL::asset('admin/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}"></script>
    <script>
        $(function () {
            $('#role-table').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : true
            });
        });
    </script>
@endsection