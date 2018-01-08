@extends('layouts.master')
@section('content')
    <!--  categories  -->
    @foreach($categories as $category)
    <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-md-9">
                        <h3>
                            {!! $category->name !!}</h3>
                    </div>
                    <div class="col-md-3">
                        <!-- Controls -->
                        <div class="controls pull-right hidden-xs">
                            <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example"
                               data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example"
                                                        data-slide="next"></a>
                        </div>
                    </div>
                </div>
                <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                @foreach($category->products as $product)
                                    <div class="col-sm-3">
                                        <div class="col-item">
                                            <div class="photo">
                                                <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                            </div>
                                            <div class="info">
                                                <div class="row">
                                                    <div class="price col-md-12">
                                                        <h5>
                                                            {!! $product->name !!}</h5>
                                                        <h5 class="price-text-color">
                                                            {!! $product->price !!}</h5>
                                                    </div>
                                                </div>
                                                <div class="text-center p-b-20">
                                                    <button data-id="{!! $product->id !!}"  class="btn btn-theme addToCartBtn ">
                                                        <i class="fa fa-shopping-cart"></i> Add to cart
                                                    </button>
                                                </div>
                                                <div class="clearfix">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                        <div class="item">
                            <div class="row">
                                @foreach($category->products as $product)
                                    <div class="col-sm-3">
                                        <div class="col-item">
                                            <div class="photo">
                                                <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                            </div>
                                            <div class="info">
                                                <div class="row">
                                                    <div class="price col-md-12">
                                                        <h5>
                                                            {!! $product->name !!}</h5>
                                                        <h5 class="price-text-color">
                                                            ${!! $product->price !!}</h5>
                                                    </div>
                                                </div>
                                                <div class="text-center p-b-20">
                                                    <button data-id="{!! $product->id !!}"  class="btn btn-theme addToCartBtn ">
                                                        <i class="fa fa-shopping-cart"></i> Add to cart
                                                    </button>
                                                </div>
                                                <div class="clearfix">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                    </div>
                </div>
            </div>
    </div>
    <!-- end categories -->
    @endforeach
@endsection
