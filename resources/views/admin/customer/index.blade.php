@extends('admin.layouts.master')

@section('style')
    <link rel="stylesheet" href="{{ URL::asset('admin/plugins/iCheck/flat/blue.css') }}">
@stop
@section('page-header')
    <section class="content-header">
        <h1>
            Mail Box
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{!! route('admin.dashboard.index') !!}">
                    <i class="fa fa-dashboard"></i> dashboard
                </a>
            </li>
            <li>
                <a href="{!! route('admin.customer.index') !!}">
                    <i class="fa fa-dashboard"></i> Customer
                </a>
            </li>
        </ol>
    </section>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Inbox</h3>

                <div class="box-tools pull-right">
                    <div class="has-feedback">
                        <input type="text" class="form-control input-sm" placeholder="Search Mail">
                        <span class="glyphicon glyphicon-search form-control-feedback"></span>
                    </div>
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <div class="mailbox-controls">
                    <!-- Check all button -->
                    <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                    </button>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm deleteBtn"
                                data-action-target="{!! route('admin.message.delete-many') !!}">
                            <i class="fa fa-trash-o"></i>
                        </button>
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                    </div>
                    <!-- /.btn-group -->
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                    <div class="pull-right">
                        1-50/200
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                        </div>
                        <!-- /.btn-group -->
                    </div>
                    <!-- /.pull-right -->
                </div>
                <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped">
                        <tbody>
                        @foreach($messages as $message)
                        <tr>
                            <td><input name="messages[]" type="checkbox" value="{!! $message->id !!}"></td>
                            <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                            <td class="mailbox-name">
                                <a href="{!! route('admin.customer.mail',[$message->id])!!}">
                                    {!! $message->customer ? $message->customer->name : '' !!}
                                </a>
                            </td>
                            <td class="mailbox-subject"><b>{!! $message->subject !!}</b> -  {!! $message->body !!} ...
                            </td>
                            <td class="mailbox-attachment"></td>
                            <td class="mailbox-date">{!! $message->created_at !!}</td>
                            <td class="mailbox-date">{!! $message->updated_at !!}</td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- /.table -->
                </div>
                <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
                <div class="mailbox-controls">
                    <!-- Check all button -->
                    <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                    </button>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                    </div>
                    <!-- /.btn-group -->
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                    <div class="pull-right">
                        1-50/200
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                        </div>
                        <!-- /.btn-group -->
                    </div>
                    <!-- /.pull-right -->
                </div>
            </div>
        </div>
        <!-- /. box -->
        </div>
    </div>
    @include('admin.partials.delete-modal')
@endsection
@section('scripts')
    <<script src="{!! asset('admin/plugins/iCheck/icheck.min.js') !!}"></script>
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

            $('.deleteBtn').click(function () {
                //var url = $(this).data('action-target');
                var url = $(this).attr('data-action-target');

                var elems = $('input[name="messages[]"]');
                $('#deleteForm').append(elems);

                $('#deleteForm').attr('action', url);
                $('#deleteModal').modal('show');
            });
        });
    </script>
    @endsection