@extends('admin.layouts.master')

@section('style')
    <link rel="stylesheet" href="{{ URL::asset('admin/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('page-header')
    <section class="content-header">
        <h1>
            Permissions
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{!! route('admin.dashboard.index') !!}">
                    <i class="fa fa-dashboard"></i> Dashboard
                </a>
            </li>
            <li class="active">
                Permissions
            </li>
        </ol>
    </section>
@stop

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <a href="{!! route('admin.permission.create') !!}" class="btn btn-primary">
                            Create Permission
                        </a>
                    </div>
                    <div class="box-body">
                        <table id="permissions-table" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>Slug</th>
                                <th>created at</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($permissions as $permission)
                                <tr>
                                    <td>{{ $permission->id }}</td>
                                    <td>{!! $permission->name !!}</td>
                                    <td>{!! $permission->slug !!}</td>
                                    <td>{!! $permission->created_at !!}</td>
                                    <td>
                                        <a href="{!! route('admin.permission.edit', [$permission->id]) !!}">
                                            <i class="fa fa-edit"></i>
                                            Edit
                                        </a>
                                        <button class="btn btn-sm btn-danger deleteBtn"
                                        data-action-target="{!! route('admin.permission.delete', [$permission->id]) !!}">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>Slug</th>
                                <th>created at</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('admin.partials.delete-modal')
@stop

@section('script')
    <!-- DataTables -->
    <script src="{!! URL::asset('admin/plugins/datatables.net/js/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! URL::asset('admin/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}"></script>
    <script>
        $(function () {
            $('#permissions-table').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : true
            });

            $('.deleteBtn').click(function () {
                //var url = $(this).data('action-target');
                var url = $(this).attr('data-action-target');

                $('#deleteForm').attr('action', url);
                $('#deleteModal').modal('show');
            });
        });
    </script>
@endsection