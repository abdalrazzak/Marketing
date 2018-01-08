@extends('admin.layouts.master')
@section('style')
    <link rel="stylesheet" href="{{ URL::asset('admin/plugins/select2/dist/css/select2.min.css') }}">
@stop

@section('page-header')
    <section class="content-header">
        <h1>
            Create New Category
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{!! route('admin.dashboard.index') !!}">
                    <i class="fa fa-dashboard"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="{!! route('admin.category.index') !!}">
                    <i class="fa fa-dashboard"></i> Categories
                </a>
            </li>
            <li class="active">
                <i class="fa fa-dashboard"></i> Create Category
            </li>
        </ol>
    </section>
@endsection
@section('content')
    <div class="box box-primary">
        <div class="box-body">
            <form method="post" action="{!! route('admin.category.store') !!}">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" name="description" rows="8" class="form-control"></textarea>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="category" >
                                select parent Category
                            </label>
                            <select name="parent_id" id="category"  class="form-control select2">
                                <option value="">select category</option>
                                @foreach($categories as $c)
                                    <option value="{!! $c->id !!}">
                                        {!! $c->name !!}
                                    </option>
                                    @endforeach
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">
                            Create
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ URL::asset('admin/plugins/select2/dist/js/select2.full.js') }}"></script>
    <script>
        $('.select2').select2();
    </script>
@stop