@extends('admin.layouts.master')

@section('page-header')
    <section class="content-header">
        <h1>
            Product
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{!! route('admin.dashboard.index') !!}">
                    <i class="fa fa-dashboard"></i> Dashboard
                </a>
            </li>
            <li class="active">
                <a href="">
                    <i class="fa fa-dashboard"></i> Products
                </a>
            </li>
        </ol>
    </section>
@endsection
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        @if(Auth::user()->can('create', \App\Product::class))
                            <a href="{!! route('admin.product.create') !!}" class="btn btn-primary">
                                Create Product
                            </a>
                        @endif
                    </div>
                    <div class="box-body">
                        <table id="post-table" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>description</th>
                                <th>created at</th>
                                <th>updated at</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $p)
                                <tr>
                                    <td>{{ $p->id }}</td>
                                    <td>{!! $p->name !!}</td>
                                    <td>{!! $p->description !!}</td>
                                    <td>{!! $p->created_at !!}</td>
                                    <td>{!! $p->updated_at !!}</td>
                                    <td>
                                        <a href="{!! route('admin.product.edit', [$p->id]) !!}">
                                            <i class="fa fa-edit"></i>
                                            Edit
                                        </a>
                                        <button class="btn btn-sm btn-danger deleteBtn"
                                        data-action-target="{!! route('admin.product.delete', [$p->id]) !!}">
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
                                <th>created at</th>
                                <th>updated at</th>
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