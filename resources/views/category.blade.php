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
                        <a href="">Shop</a>
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

                    <div class="row">
                        <!-- Content -->
                        <div class="col-sm-8 col-md-8">
                            <!-- Shop options -->
                            <div class="clearfix row m-t-40 m-b-40">
                                <div class="col-md-8 text-left m-t-10">
                                    Showing 1–12 of 23 results
                                </div>
                                <div class=" col-md-4 text-right">
                                    <form method="post" action="" class="form">
                                        <select class="input-md form-control">
                                            <option>Default sorting</option>
                                            <option>Sort by price: low to high</option>
                                            <option>Sort by price: high to low</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                            <!-- End Shop options -->

                            @if(isset($category))
                            <div class="row">
                                @foreach($category->products as $product)
                                <div class="col-sm-6 col-md-6 m-b-60">
                                    <div class="border-all">
                                        <div class="post-img">
                                            <a href="{!! route('shop.product', [$product->id]) !!}">
                                                <img src="{!! asset('bizstart/images/shop/shop-1.jpg') !!}" alt="" />
                                            </a>
                                            <div class="sale-tag">
                                                <span class="btn btn-theme bg-red">{!! $product->name !!}</span>
                                            </div>
                                        </div>
                                        <div class="post-title text-center">
                                            <a href="{!! route('shop-single') !!}">Premium Quality</a>
                                        </div>
                                        <div class="post-text text-center">
                                            <del>$100</del> &nbsp;
                                            <strong>$70</strong>
                                        </div>
                                        <div class="text-center p-b-20">
                                            <a href="" class="btn btn-theme"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endif
                        </div>
                        <!-- End Content -->
                       @include('partials.shop-sidebar')
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Section End Here-->
    </div>
    <!-- Main Section End Here -->


@stop