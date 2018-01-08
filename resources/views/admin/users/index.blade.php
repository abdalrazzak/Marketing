@extends('admin.layouts.master')

@section('page-header')
    <section class="content-header">
        <h1>
            Users

        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! route('admin.dashboard.index') !!}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Users</li>
        </ol>
    </section>
@endsection
@section('content')
    <section class="content">
        @include('admin.partials.notifications')
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div>
                        <a href="{!! route('admin.user.create') !!}" class="btn btn-primary btn-sm">
                            <i class="fa fa-plus"></i>
                            Create User
                        </a>
                    </div>
                    <div class="box-body">
                        <table id="user-table" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Fname</th>
                                <th>Lname</th>
                                <th>email</th>
                                <th>password</th>
                                <th>created at</th>
                                <th>updated at</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{!! $user->first_name !!}</td>
                                    <td>{!! $user->last_name !!}</td>
                                    <td>{!! $user->email !!}</td>
                                    <td>{!! $user->password !!}</td>
                                    <td>{!! $user->created_at !!}</td>
                                    <td>{!! $user->updated_at !!}</td>
                                    <td>
                                        <a href="{!! route('admin.user.edit',[$user->id]) !!}" >
                                            <i class="fa fa-edit"></i>
                                            Edit
                                        </a>
                                        <a href="#" class="btn btn-sm btn-danger deleteBtn" data-action-target="{!! route('admin.user.delete',[$user->id]) !!}">
                                            <i class="fa fa-trash"></i>

                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>id</th>
                                <th>Fname</th>
                                <th>Lname</th>
                                <th>email</th>
                                <th>password</th>
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
    @include('admin.partials.delete-modal')
@endsection
@section('scripts')
    <!-- DataTables -->
    <script src="{!! URL::asset('admin/plugins/datatables.net/js/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! URL::asset('admin/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}"></script>
    <script>
        $(function () {
            $('#user-table').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : true
            });
            $('.deleteBtn').click(function (){
                var url=$(this).attr('data-action-target');
                $('#deleteForm').attr('action',url);
                $('#deleteModal').modal();

            });

        });
    </script>
@endsection
