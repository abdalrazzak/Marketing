@extends('admin.layouts.master')
@section('style')
    <link rel="stylesheet" href="{!! asset('admin/plugins/select2/dist/css/select2.min.css') !!}">
@stop
@section('page-header')
    <section class="content-header">
        <h1>
            Create New User
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! route('admin.dashboard.index') !!}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{!! route('admin.user.index') !!}">Users</a></li>
            <li class="active">Users</li>
        </ol>
    </section>
@endsection
@section('content')
    <section class="content">
        @if(Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {!! Session::get('error') !!}
            </div>
        @endif
        <div class="row">
            <div class="col-xs-12">
                <form action="{!! route('admin.user.store') !!}" method="POST">
                    {!! csrf_field() !!}
                    <div class="box box-primary">
                       @if(Session::has('error'))
                           <div class="alert alert-danger">
                               {!! Session::get('error') !!}

                           </div>

                           @endif
                        <div class="box-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="first_name">First Name</label>
                                                <input id="first_name" type="text" name="first_name" class="form-control">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="last_name">Last Name</label>
                                                <input id="last_name" type="text" name="last_name" class="form-control">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="email">Email</label>
                                                <input id="email" type="text" name="email" class="form-control">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="password">Password</label>
                                                <input id="password" type="password" name="password" class="form-control">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="password_confirmation">Password Confirmation</label>
                                                <input id="password_confirmation" type="password" name="password_confirmation" class="form-control">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <lable for="role">Select Roles</lable>
                                                <select name="roles[]" style="width: 100%;" multiple="multiple"  id="role" class="form-control select2 ">
                                                    @foreach($roles as $role)
                                                        <option value="{!! $role->id !!}">
                                                            {!! $role->name !!}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    </div>





                                   {{-- <div class="col-md-6">

                                            <div class="custom-controls-stacked">
                                                @foreach($roles as $role)
                                                <label class="custom-control custom-radio">
                                                    <input id="role{!! $role->id !!}" name="role_id" type="radio" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">{!! $role->name !!}</span>
                                                </label>
                                                @endforeach
                                            </div>

                                    </div>--}}
                                </div>



                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-success">Save User</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="{!! asset('admin/plugins/select2/dist/js/select2.full.js') !!}"></script>
    <script>

        $('.select2').select2();

    </script>

@stop