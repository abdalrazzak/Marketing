@extends('admin.layouts.master')
@section('style')
    <link rel="stylesheet" href="{!! asset('admin/plugins/iCheck/flat/blue.css') !!}">
@stop
@section('page-header')
    <section class="content-header">
        <h1>
            Edit Role {!! $role->name !!}
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
                <form action="{!! route('admin.role.update',[$role]) !!}" method="POST">
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
                                                <input id="name" type="text" name="name" value="{!! $role->name !!}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea id="description" name="description"  class="form-control">{!! $role->description !!} </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="permissions" role="tabpanel">
                                    <!-- her for each -->
                                    <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>  Select Permission All </button>

                                    <div class="table-responsive mailbox-messages">
                                        <table class="table table-hover table-striped">
                                            <tbody>
                                            @foreach($permissions as $permission)
                                                <tr>
                                                    <td>
                                                            <div class="form-group">
                                                                <label class="custom-control  custom-checkbox" for="permission">
                                                                    <input type="checkbox" id="permission" name="permissions[]"
                                                                           class="custom-control-input" value="{!! $permission->id !!}"
                                                                           @if(in_array($permission->id, $rolePer)) checked @endif
                                                                    >
                                                                    <span class="custom-co ntrol-indicator"></span>
                                                                    <span class="custom-control-description">{!! $permission->name !!}</span>
                                                                </label>
                                                            </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <!-- /.table -->
                                    </div>

                                    <!-- endforeach -->
                                </div>
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
@section('scripts')
    <script src="{!! asset('admin/plugins/iCheck/icheck.min.js') !!}"></script>
    <!-- Page Script -->
    <script>
        $(function () {
            //Enable iCheck plugin for checkboxes
            //iCheck for checkbox and radio inputs
            $('.mailbox-messages input[type="checkbox"]').iCheck({
                checkboxClass: 'icheckbox_flat-blue',
                radioClass: 'iradio_flat-blue'
            });

            //Enable check and uncheck all functionality
            $(".checkbox-toggle").click(function () {
                var clicks = $(this).data('clicks');
                if (clicks) {
                    //Uncheck all checkboxes
                    $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
                    $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
                } else {
                    //Check all checkboxes
                    $(".mailbox-messages input[type='checkbox']").iCheck("check");
                    $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
                }
                $(this).data("clicks", !clicks);
            });

            //Handle starring for glyphicon and font awesome
            $(".mailbox-star").click(function (e) {
                e.preventDefault();
                //detect type
                var $this = $(this).find("a > i");
                var glyph = $this.hasClass("glyphicon");
                var fa = $this.hasClass("fa");

                //Switch states
                if (glyph) {
                    $this.toggleClass("glyphicon-star");
                    $this.toggleClass("glyphicon-star-empty");
                }

                if (fa) {
                    $this.toggleClass("fa-star");
                    $this.toggleClass("fa-star-o");
                }
            });

        });
    </script>
@endsection