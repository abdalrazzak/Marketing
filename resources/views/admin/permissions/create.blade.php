@extends('admin.layouts.master')

@section('page-header')
    <section class="content-header">
        <h1>
            Create New Permission
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{!! route('admin.dashboard.index') !!}">
                    <i class="fa fa-dashboard"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="{!! route('admin.permission.index') !!}">
                    Permissions
                </a>
            </li>
            <li class="active">
                Create Permission
            </li>
        </ol>
    </section>
@endsection

@section('content')

    <div class="box box-primary">
        <div class="box-body">
            <form method="post" action="{!! route('admin.permission.store') !!}">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="name">Name</label>
                                <input id="name" type="text" name="name" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">
                                Create
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection