@extends('admin.layouts.master')

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
            <li>
                <a href="{!! route('admin.customer.mail',[$message->id]) !!}">
                    <i class="fa fa-dashboard"></i> Mail
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
                <h3 class="box-title">Read Mail</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="mailbox-read-info">
                    <h3>{!! $message->subject !!}</h3>
                    <h5>From:{!! $customer->email !!}
                        <span class="mailbox-read-time pull-right">
                            {!! date_format(new DateTime($message->created_at), 'M d, Y H:i') !!}
                        </span>
                    </h5>
                </div>

                <div class="mailbox-read-message">
                    {!! $message->body !!}
                </div>
                <!-- /.mailbox-read-message -->
                @if($message->childs)
                    @foreach($message->childs as $child)
                        <hr>
                        <h4>{!! $child->subject !!}</h4>
                        <h5>
                            {!! $child->user ? $child->user->present()->fullName() : '' !!}
                            <span class="mailbox-read-time pull-right">{!! $child->created_at !!}</span>
                        </h5>
                        <p>{!! $child->body !!}</p>

                    @endforeach
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <form method="post" action="{!! route('admin.message.send') !!}">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <input type="hidden" name="parent_id" value="{!! $message->id !!}">
                            <div class="form-group">
                                <textarea rows="8" name="body" class="form-control"></textarea>
                            </div>
                            <div class="pull-right">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-reply"></i> Reply
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.box-footer -->
            <div class="box-footer">
                <button class="btn btn-sm btn-default deleteBtn"
                        data-action-target="{!! route('admin.customer.delete',[$message->id]) !!}">
                    <i class="fa fa-trash"></i>
                    Delete
                </button>
            </div>
            <!-- /.box-footer -->
        </div>
        </div>
        <!-- /. box -->
    </div>
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
