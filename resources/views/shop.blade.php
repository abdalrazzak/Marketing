@extends('layouts.master')
@section('ribbon')
    <!-- Page Header Start Here -->
    <section class="page-header">
        <div class="product-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <h2 class="p-tb-10">Shop</h2>
                    </div>
                    <div class="col-md-3 m-t-15">
                        <a href="{!! route('home') !!}">Home</a> <i class="fa fa-angle-double-right"></i>
                        <a href="{!! route('shop.home') !!}">Shop</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Header End Here -->


@stop
@section('content')

    <!-- Main Section Start Here -->
    <div id="main">
        <!-- Pricing Section Start Here-->
        <section id="shop" class="shop-section">
            <div class="section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <header class="page-header section-header text-center">
                                <h1 class="h-bold">Shop</h1>
                                <span class="line text-center"></span>
                                <p>Affordable pricing for everyone! We want you to get the best deal!</p>
                            </header>
                        </div>
                    </div>
                    <!-- Shop options -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="clearfix row m-t-40 m-b-40">
                                <div class="col-md-8 text-left m-t-10">
                                    Showing 1 – {!! count($products) !!} of .... results
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Shop options -->
                    <div class="row">
                        <!--content -->
                        <div class="col-md-9">
                            <!-- Content -->
                            <div class="row">
                                <!-- Shop Item -->
                                @foreach($products as $product)
                                    <div class="col-sm-3 col-md-3 m-b-30">
                                        <div class="border-all">
                                            <div class="post-img">
                                                <a href="{!! route('shop.product',[$product->id]) !!}"><img src="{!! asset('bizstart/images/shop/shop-1.jpg') !!}" alt="" /></a>
                                            </div>
                                            <div class="post-title text-center">
                                                {!! $product->name !!}
                                            </div>
                                            <div class="post-text text-center">&nbsp;
                                                <strong>${!! $product->price !!}</strong>
                                            </div>
                                            <div class="text-center p-b-20">
                                                <button data-id="{!! $product->id !!}"  class="btn btn-theme addToCartBtn">
                                                    <i class="fa fa-shopping-cart"></i> Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                            <!-- End Shop Item -->
                            </div>
                        </div>
                        <!-- End Content -->
                        <!-- Sidebar -->
                        <div class="col-md-3">
                            <div class="row">
                            <div id="side-bar" class="col-sm-3 col-md-3 m-t-30 m-b-30">

                                @if($categories)
                                    <div class="widget sidebar-widget categories">
                                        <h5>Shop Categories</h5>
                                        <div class="widget-body">
                                            <ul class="clearlist">
                                                @foreach($categories as $category)
                                                    <li>
                                                        <a href="{!! route('shop.category',[$category->id]) !!}" title="" ">
                                                            <i class="fa fa-angle-right"></i>{!! $category->name !!}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endif

                            </div>
                            </div>
                        </div>
                        <!-- End Sidebar -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Section End Here-->
    </div>
    <!-- Main Section End Here -->


@stop
@section('scripts')
    <script>
        $(function () {
            $('.addToCartBtn').click(function () {
                var productId = $(this).data('id');
                $.ajax({
                    method : 'POST',
                    url : '{!! route('shop.product.add-to-cart') !!}',
                    data :{productId :productId},
                    dataType : 'JSON',
                    success : function  (response)
                    {
                        $('.cartIcon').text(response.count)
                        toastr.success('successfully added your cart')
                    },
                    error : function (xhr) {
                        
                    }
                });
            });
        });
    </script>
@stop
