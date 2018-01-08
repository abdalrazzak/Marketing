@extends('admin.layouts.master')
@section('page-header')
    <section class="content-header">
        <h1>
            Create New Role
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! route('admin.dashboard.index') !!}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{!! route('admin.role.index') !!}">Users</a></li>
            <li class="active">Roles</li>
        </ol>
    </section>
@endsection
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <form action="{!! route('admin.role.store') !!}" method="POST">
                    {!! csrf_field() !!}
                    <div class="box box-primary">
                        <div class="box-body">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#general" role="tab">General</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#permissions" role="tab">Permissions</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="general" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input id="name" type="text" name="name" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea id="description" name="description" class="form-control"> </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              {{--  <div class="tab-pane" id="permissions" role="tabpanel">
                                    @foreach($permissions as $p)
                                        <div class="form-group">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" name="permissions[]"
                                                       class="custom-control-input" value="{!! $p->id !!}">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">{!! $p->name !!}</span>
                                            </label>
                                        </div>
                                    @endforeach
                                </div>--}}
                            </div>

                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-success">Save Role</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection