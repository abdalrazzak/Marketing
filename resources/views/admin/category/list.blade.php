@extends('admin.layouts.master')

@section('page-header')
    <section class="content-header">
        <h1>
            Categories
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{!! route('admin.category.index') !!}">
                    <i class="fa fa-dashboard"></i> Category
                </a>
            </li>
        </ol>
    </section>
@endsection
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {!! Session::get('success') !!}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <a href="{!! route('admin.category.create') !!}" class="btn btn-primary">
                            Create Category
                        </a>
                    </div>
                    <div class="box-body">
                        <table id="post-table" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>description</th>
                                <th>parent</th>
                                <th>created at</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{!! $category->name !!}</td>
                                    <td>{!! $category->description !!}</td>
                                    <td>{!! $category->parent ? $category->parent->name : '' !!}</td>
                                    <td>{!! $category->created_at !!}</td>
                                    <td>
                                        <a href="{!! route('admin.category.edit', [$category->id]) !!}">
                                            <i class="fa fa-edit"></i>
                                            Edit
                                        </a>
                                        <button class="btn btn-sm btn-danger deleteBtn"
                                                data-action-target="{!! route('admin.category.delete', [$category->id]) !!}">
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
                                <th>description</th>
                                <th>parent</th>
                                <th>created at</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    @include('admin.partials.delete-modal')
@endsection

@section('scripts')
    <script>
        $(function () {
            $('.deleteBtn').click(function () {
                //var url = $(this).data('action-target');
                var url = $(this).attr('data-action-target');

                $('#deleteForm').attr('action', url);
                $('#deleteModal').modal('show');
            });
        });
    </script>
@endsection