<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    @yield('meta')
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ URL::asset('admin/plugins/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ URL::asset('admin/plugins/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ URL::asset('admin/plugins/Ionicons/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ URL::asset('admin/css/AdminLTE.min.css') }}">
    <!-- dropzone -->
    <link rel="stylesheet" href="{{ URL::asset('admin/css/basic.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/css/dropzone.css') }}">


    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ URL::asset('admin/css/skins/_all-skins.min.css') }}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ URL::asset('admin/plugins/morris.js/morris.css') }}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ URL::asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

    @yield('style')
<!-- jQuery 3 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @include('admin.partials.nav')
    @include('admin.partials.leftsidebar')
    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @include('admin.partials.notifications')
            @yield('page-header')
            @yield('content')
        </div>
    @include('admin.partials.footer')
</div>



<!-- jQuery UI 1.11.4 -->
<script src="{!! URL::asset('admin/plugins/jquery-ui/jquery-ui.min.js') !!}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{!! URL::asset('admin/plugins/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
<!-- Morris.js charts -->
<script src="{!! URL::asset('admin/plugins/raphael/raphael.min.js') !!}"></script>
<script src="{!! URL::asset('admin/plugins/morris.js/morris.min.js') !!}"></script>
<!-- FastClick -->
<script src="{!! URL::asset('admin/plugins/fastclick/lib/fastclick.js') !!}"></script>
<!-- Sparkline -->
<script src="{!! URL::asset('admin/plugins/jquery-sparkline/dist/jquery.sparkline.min.js') !!}"></script>
<!-- jQuery Knob Chart -->
<script src="{!! URL::asset('admin/plugins/jquery-knob/dist/jquery.knob.min.js') !!}"></script>

<!-- AdminLTE App -->
<script src="{!! URL::asset('admin/js/adminlte.min.js') !!}"></script>
<script src="{!! URL::asset('admin/js/dropzone.js') !!}"></script>
<script src="{!! URL::asset('admin/js/dropzone-amd-module.js') !!}"></script>

@yield('scripts')
</body>
</html>