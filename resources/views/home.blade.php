@extends('layouts.master')
@section('style')
    <link rel="stylesheet" href="{!! asset('lib/css/style-caro.css') !!}">
@stop
@section('content')

    <!-- banner section Start Here -->
    <section class="banner">
        <!-- Carousel -->
        <div id="slide" class="carousel slide container" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators visible-lg visible-md">
                <li data-target="#slide" data-slide-to="0" class="active"></li>
                <li data-target="#slide" data-slide-to="1"></li>
                <li data-target="#slide" data-slide-to="2"></li>
            </ol><!--/ Indicators end-->

            <!-- Carousel inner -->
            <div class="carousel-inner">
                <div class="item active" style="background-image:url({!! asset('bizstart/images/slider/1.jpg') !!})">
                    <div class="slider-content text-left">
                        <div class="col-md-12">
                            <h3 class="slide-sub-title animate3">The strongest offer</h3>
                            <p class="slider-description lead animate3">More than 100 lamp wholesale or retail</p>
                            <p class="animate3">
                                <a href="{!! route('shop.home') !!}" class="btn btn-theme">Buy</a>
                                <a href="#" class="btn btn-theme btn-theme2">More</a>
                            </p>
                        </div>
                    </div>
                </div><!--/ Carousel item 1 end -->

                <div class="item" style="background-image:url({!! asset('bizstart/images/slider/2.jpg') !!})">
                    <div class="slider-content text-right">
                        <div class="col-md-12">
                            <h3 class="slide-sub-title animate3">The strongest offer</h3>
                            <p class="slider-description lead animate3">More than 100 brushes wholesale or retail</p>
                            <p class="animate3">
                                <a href="{!! route('shop.home') !!}" class="btn btn-theme">Buy</a>
                                <a href="#" class="btn btn-theme btn-theme2">More</a>
                            </p>
                        </div>
                    </div>
                </div><!--/ Carousel item 2 end -->
                <div class="item" style="background-image:url({!! asset('bizstart/images/slider/3.jpg') !!})">
                    <div class="slider-content">
                        <div class="col-md-12">
                            <h3 class="slide-sub-title animate3">The strongest offer</h3>
                            <p class="slider-description lead animate3">More than 100 a bag wholesale or retail</p>
                            <p class="animate3">
                                <a href="{!! route('shop.home') !!}" class="btn btn-theme">Buy</a>
                                <a href="#" class="btn btn-theme btn-theme2">More</a>
                            </p>
                        </div>
                    </div>
                </div><!--/ Carousel item 3 end -->

            </div><!-- Carousel inner end-->

            <!-- Controllers -->
            <a class="left carousel-control" href="index.html#slide" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
            </a>
            <a class="right carousel-control" href="index.html#slide" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
            </a>
        </div><!--/ Carousel end -->
    </section><br>
    <!-- banner section End Here -->
    <!-- icon bar -->
    <!--  categories  -->
    <div class="container">
        @if($products)
            <div class="row">
                <div class="row">
                    <div class="col-md-9">
                        <h3>
                            new products</h3>
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
                                @foreach($products as $product)
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
                                @foreach($products as $product)
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
        @endif
    </div>
    <!-- end categories -->



    <!-- why-chose Section Start Here-->
    <section class="why-chose">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <header class="page-header section-header text-center">
                            <h1 class="h-bold"> Products </h1>
                            <span class="line text-center"></span>
                            <p>I choose your product and will get you soon</p>
                        </header>
                    </div>
                </div>
                <div class="row">
                    <!-- Shop Item -->
                    @foreach($products as $product)
                        <div class="col-sm-3 col-md-3 m-b-30">
                            <div class="border-all">
                                <div class="post-img">
                                    <a href="{!! route('shop.product',[$product->id]) !!}"><img src="{!! asset('bizstart/images/shop/shop-4.jpg') !!}" alt="" /></a>
                                </div>
                                <div class="post-title text-center">
                                        {!! $product->name !!}
                                </div>
                                <div class="post-text text-center">&nbsp;
                                    <strong>${!! $product->price !!}</strong>
                                </div>
                                <div class="text-center p-b-20">
                                    <button data-id="{!! $product->id !!}"  class="btn btn-theme addToCartBtn ">
                                        <i class="fa fa-shopping-cart"></i> Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                @endforeach
                <!-- End Shop Item -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <header class="page-header section-header text-center">
                            <h1 class="h-bold"> Categories </h1>
                            <span class="line text-center"></span>
                            <p>Here there are all kinds of shopping</p>
                        </header>
                    </div>
                </div>
                <div class="row">
                    <div class="preferences m-t-40 clearfix text-center">
                        <div class="no-p col-md-4 col-sm-6">
                            <div class="biz-block">
                                <figure class="pref-image">
                                    <i class="fa  fa-mobile fa-2x"></i>
                                </figure>
                                <h3 class="pref-title">Select your mobile</h3>
                                <p><span class="pref-desc">Many types of modern devices put them in your hands with the possibility of payment in installments comfortable .</span></p>
                            </div>
                        </div>
                        <div class="no-p col-md-4 col-sm-6">
                            <div class="biz-block">
                                <figure class="pref-image">
                                    <i class="fa  fa-desktop fa-2x"></i>
                                </figure>
                                <h3 class="pref-title">Electronic</h3>
                                <p><span class="pref-desc">We offer all kinds of electronics, TV, radio, playstation games, cameras and more on demand</span></p>
                            </div>
                        </div>
                        <div class="no-p col-md-4 col-sm-6">
                            <div class="biz-block">
                                <figure class="pref-image">
                                    <i class="fa fa-check-circle-o fa-2x"></i>
                                </figure>
                                <h3 class="pref-title">Get your Excellent Quality</h3>
                                <p><span class="pref-desc">We deal with the best companies to be a good and cheap product to satisfy everyone</span></p>
                            </div>
                        </div>
                        <div class="no-p col-md-4 col-sm-6">
                            <div class="biz-block">
                                <figure class="pref-image">
                                    <i class="fa fa-money fa-2x"></i>
                                </figure>
                                <h3 class="pref-title">30 Days Money Back Guarantee</h3>
                                <p><span class="pref-desc">Lots of sensitive devices so our company provides warranty on the product sold</span></p>
                            </div>
                        </div>
                        <div class="no-p col-md-4 col-sm-6">
                            <div class="biz-block">
                                <figure class="pref-image">
                                    <i class="fa fa-clock-o fa-2x"></i>
                                </figure>
                                <h3 class="pref-title">We save your time and money</h3>
                                <p><span class="pref-desc">We offer online payment only. You can book your product anywhere you want.</span></p>
                            </div>
                        </div>
                        <div class="no-p col-md-4 col-sm-6">
                            <div class="biz-block">
                                <figure class="pref-image">
                                    <i class="fa fa-list-ol fa-2x"></i>
                                </figure>
                                <h3 class="pref-title">Clothing for males and females</h3>
                                <p><span class="pref-desc">There are all kinds of men's, women's, children's, infants' and many more.</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cat-One Section End Here-->
@endsection

@section('scripts')
    <script>
        $(function () {
            $('.addToCartBtn').click(function () {
                var productId = $(this).data('id');
                $.ajax({
                    method :'post',
                    url : '{!! route('shop.product.add-to-cart') !!}',
                    data : {productId:productId},
                    dataType :'json',
                    success : function (response) {
                        $('#cartIcon').text(response.count)
                        toastr.success('You have successfully added the cart')
                    },
                    error : function (xhr) {


                    }
                });

            });
            $('.mobile').hover(function () {
                $.ajax({
                    method : 'post',
                    url : '{!! route('home.best-seller') !!}',
                    data : {mobile :'mobile'},
                    dataType : 'json',
                    success : function (response) {
                        $.each(response.data, function (index, el) {

                        });
                        $('.best-seller1').empty();
                    },
                    error : function (xhr) {

                    }
                });
            });
        });
    </script>
@endsection
