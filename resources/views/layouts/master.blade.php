<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="marketing  sold shop">
    <meta name="keywords" content="markting">


    <!-- Site Title   -->
    <title>Bizstart Multipurpose HTML5 Template</title>
    <!-- Fav Icons   -->
    <link rel="icon" href="bizstart/images/favicon.png">
    <link rel="apple-touch-icon" href="bizstart/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="bizstart/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="bizstart/images/apple-touch-icon-114x114.png">
    <!-- Bootstrap -->
    <link href="{!! asset('bizstart/css/bootstrap.min.css') !!}" rel="stylesheet">
    <!-- dropzone -->
    <link href="{!! asset('bizstart/css/basic.css') !!}" rel="stylesheet">
    <link href="{!! asset('bizstart/css/dropzone.css') !!}" rel="stylesheet">
    <!-- Animate -->
    <link href="{!! asset('bizstart/css/animate.min.css') !!}" rel="stylesheet">
    <!-- Main CSS -->
    <link href="{!! asset('bizstart/css/prettyPhoto.css') !!}" rel="stylesheet">
    <link href="{!! asset('bizstart/css/pe-icon-7-stroke.css') !!}" rel="stylesheet">
    <link href="{!! asset('bizstart/css/owl.transitions.css') !!}" rel="stylesheet">
    <link href="{!! asset('bizstart/css/owl.theme.default.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('bizstart/css/owl.carousel.css') !!}" rel="stylesheet">
    <link href="{!! asset('bizstart/css/hover.css') !!}" rel="stylesheet">
    <link href="{!! asset('bizstart/css/global.css') !!}" rel="stylesheet">
    <link href="{!! asset('bizstart/css/font-awesome.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('bizstart/css/style.css') !!}" rel="stylesheet">
    <link href="{!! asset('lib/toastr/toastr.min.css') !!}" rel="stylesheet">
    <!-- responsive stylesheet -->
    <link rel="stylesheet" href="{!! asset('bizstart/css/responsive.css') !!}">
@yield('style')
</head>
<body>
<div class="web-sidebar-menu-container" id="web-sidebar-menu-container">
    <div class="web-sidebar-menu-push">
        <div class="web-sidebar-menu-overlay"></div>
        <div class="web-sidebar-menu-inner">
            @include('partials.header')
            <div class="header-space"></div>
            @yield('ribbon')
            @yield('content')
            @include('partials.footer')
            <a class="scroll-top fa fa-angle-up" href="javascript:void(0)"></a>
        </div>
    </div>
</div>


<!-- END OF STYLE SWITCHER -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{!! asset('bizstart/js/jquery.min.js') !!}"></script>
<script src="{!! asset('bizstart/js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('bizstart/js/smooth-scroll.js') !!}"></script>
<script src="{!! asset('bizstart/js/jquery.ajaxchimp.min.js') !!}"></script>
<script src="{!! asset('bizstart/js/jquery.countTo.js') !!}"></script>
<script src="{!! asset('bizstart/js/isotope.pkgd.min.js') !!}"></script>
<script src="{!! asset('bizstart/js/jquery.appear.js') !!}"></script>
<script src="{!! asset('bizstart/js/jquery.plugin.min.js') !!}"></script>
<script src="{!! asset('bizstart/js/owl.carousel.min.js') !!}"></script>
<script src="{!! asset('bizstart/js/jquery.prettyPhoto.js') !!}"></script>
<script src="{!! asset('bizstart/js/nanoscroll.js') !!}"></script>
<script src="{!! asset('bizstart/js/wow.min.js') !!}"></script>
<script src="{!! asset('bizstart/js/script.js') !!}"></script>
<script src="{!! asset('lib/toastr/toastr.min.js') !!}"></script>
<script src="{!! asset('bizstart/js/dropzone.js') !!}"></script>
<script src="{!! asset('bizstart/js/dropzone-amd-module.js') !!}"></script>
@yield('scripts')
</body>
</html>