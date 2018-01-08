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
                        <a href="{!! route('shop-single') !!}">Shop Single</a>
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
        <!-- Shop single Section Start Here-->
        <section id="shop" class="shop-section">
            <div class="section-padding">
                <div class="container">
                    <div class="row">
                        <!-- Content -->
                        <div class="col-sm-8 col-md-8 m-t-40 m-b-40">
                            <!-- Product Content -->
                            <div class="row">
                                <!-- Product Images -->
                                <div class="col-md-4">
                                    <div class="post-img">
                                        <a href="{!! asset('bizstart/images/shop/shop-1.jpg') !!}" class="main-image" rel="prettyPhoto[gallery1]">
                                            <img src="{!! asset('bizstart/images/shop/shop-1.jpg') !!}" alt="" />
                                        </a>
                                        <div class="sale-tag">
                                            <span class="btn btn-theme bg-red">Sale</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3 post-img">
                                            <a href="bizstart/images/shop/shop-2.jpg" class="main-image" rel="prettyPhoto[gallery1]">
                                                <img src="bizstart/images/shop/shop-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="col-xs-3 post-img">
                                            <a href="bizstart/images/shop/shop-3.jpg" class="main-image" rel="prettyPhoto[gallery1]">
                                                <img src="bizstart/images/shop/shop-3.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="col-xs-3 post-img">
                                            <a href="bizstart/images/shop/shop-4.jpg" class="main-image" rel="prettyPhoto[gallery1]">
                                                <img src="bizstart/images/shop/shop-4.jpg" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Images -->

                                <!-- Product Description -->
                                <div class="col-md-8">
                                    <h3 class="mt-0">{!! $product->name !!}</h3>
                                    <hr class="m-t-20 m-b-20"/>
                                    <div class="row">
                                        <div class="col-xs-6 lead mt-0 mb-20">
                                            <del class="section-text">${!! $product->price !!}</del>
                                            <strong>$70</strong>
                                        </div>
                                        <div class="col-xs-6 align-right section-text">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            &nbsp;(3 reviews)
                                        </div>
                                    </div>
                                    <hr class="m-t-20 m-b-20"/>
                                    <div class="section-text m-b-30">
                                        {!! $product->description !!}
                                    </div>
                                    <hr class="m-t-20 m-b-20"/>
                                    <div class="mb-30">
                                        <form method="post" action="{!! route('shop-single') !!}" class="form">
                                            <input type="number" class="num-select form-control" min="1" max="100" value="1" />
                                            <a href="{!! route('shop-single') !!}" class="btn btn-theme">Add to Cart</a>
                                        </form>
                                    </div>
                                    <hr class="m-t-20 m-b-20"/>
                                    <div class="shop-cat-text">
                                        <div>Category: <a href=""> Polo shirts</a></div>
                                    </div>
                                </div>
                                <!-- End Product Description -->
                            </div>
                            <!-- End Product Content -->
                            <hr class="m-t-20 m-b-20"/>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="" data-toggle="tab">Reviews (3)</a></li>
                                <li><a href="" data-toggle="tab">Description</a></li>
                            </ul>
                            <!-- End Nav tabs -->

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade" id="one">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque mollis lacus augue, a hendrerit leo tristique vitae. Mauris non ipsum molestie, sagittis elit ac, vulputate odio. Fusce quam augue, gravida tincidunt dui nec, tempor iaculis justo.
                                        Aliquam tortor leo, pharetra non congue sit amet, bibendum sit amet enim. Nullam sit amet malesuada justo.
                                    </p>
                                    <p>
                                        Nunc vulputate semper erat, non iaculis sapien congue sit amet. Duis non nulla volutpat, dignissim leo sit amet, porta nunc. Donec placerat fermentum metus ac scelerisque. In id sollicitudin nulla. Suspendisse potenti. Integer aliquam orci
                                        aliquam eros posuere ornare. Fusce augue felis, maximus non lacus vitae, ullamcorper dignissim leo. Ut congue feugiat turpis at aliquam. Donec eros neque, accumsan sed venenatis volutpat, tempor at metus.
                                    </p>
                                </div>
                                <div class="tab-pane fade in active" id="two">
                                    <div class="mb-60 mb-xs-30">
                                        <ul class="media-list text comment-list clearlist">
                                            <!-- Comment Item -->
                                            <li class="media comment-item">
                                                <a class="pull-left" href="{!! route('shop-single') !!}"><img class="media-object comment-avatar" src="images/user-avatar.png" alt=""></a>
                                                <div class="media-body">
                                                    <div class="comment-item-data">
                                                        <div class="comment-author">
                                                            <a href="{!! route('shop-single') !!}">Deborah Hughes</a>
                                                        </div>
                                                        <span>Feb 9, 2014, at 10:37</span>
                                                        <span>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                    </div>
                                                    <p>
                                                        Donec fermentum turpis et finibus commodo. Sed dictum laoreet mi, vitae dignissim purus interdum at. Sed a est at purus cursus elementum ut sed lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.
                                                    </p>
                                                </div>
                                            </li>
                                            <!-- End Comment Item -->

                                            <!-- Comment Item -->
                                            <li class="media comment-item">
                                                <a class="pull-left" href="{!! route('shop-single') !!}"><img class="media-object comment-avatar" src="images/user-avatar.png" alt=""></a>
                                                <div class="media-body">
                                                    <div class="comment-item-data">
                                                        <div class="comment-author">
                                                            <a href="{!! route('shop-single') !!}">Deborah Hughes</a>
                                                        </div>
                                                        <span>Feb 9, 2014, at 10:37</span>
                                                        <span>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.
                                                    </p>
                                                </div>
                                            </li>
                                            <!-- End Comment Item -->

                                        </ul>
                                    </div>

                                    <!-- Add Review -->
                                    <div class="m-t-30 m-b-30">
                                        <h4 class="p-t-20 p-b-20">Add Review</h4>
                                        <!-- Form -->
                                        <form method="post" action="{!! route('shop-single') !!}" id="form" role="form" class="form">
                                            <div class="row mb-20 mb-md-10">
                                                <div class="col-md-6 mb-md-10">
                                                    <!-- Name -->
                                                    <input type="text" name="name" id="name" class="input-md form-control" placeholder="Name *" maxlength="100" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- Email -->
                                                    <input type="email" name="email" id="email" class="input-md form-control" placeholder="Email *" maxlength="100" required>
                                                </div>
                                            </div>
                                            <div class="mb-20 mb-md-10">
                                                <!-- Rating -->
                                                <select class="input-md round form-control">
                                                    <option>-- Select one --</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                            <!-- Comment -->
                                            <div class="mb-30 mb-md-10">
                                                <textarea name="text" id="text" class="input-md form-control" rows="6" placeholder="Comment" maxlength="400"></textarea>
                                            </div>
                                            <!-- Send Button -->
                                            <button type="submit" class="btn btn-theme">
                                                Send Review
                                            </button>
                                        </form>
                                        <!-- End Form -->

                                    </div>
                                    <!-- End Add Review -->
                                </div>
                            </div>
                            <!-- End Tab panes -->
                        </div>
                        <!-- Sidebar -->
                        <div id="side-bar" class="col-sm-4 col-md-4 m-t-40 m-b-40">
                            <!-- Widget -->
                            <div class="widget sidebar-widget">
                                <h4>Shopping Cart</h4>
                                <div class="widget-body">
                                    <ul class="clearlist widget-posts">
                                        <!-- Preview item -->
                                        <li class="clearfix">
                                            <a href="">
                                                <img src="{!! asset('bizstart/images/shop/shop-01.jpg') !!}" alt="" class="widget-posts-img" />
                                            </a>
                                            <div class="widget-posts-descr">
                                                <a href="" title="">{!! $product->name !!}</a>
                                                <div>
                                                    <a href=""><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End Preview item -->

                                        <!-- Preview item -->
                                        <li class="clearfix">
                                            <a href="{!! route('shop-single') !!}"><img src="bizstart/images/shop/shop-02.jpg" alt="" class="widget-posts-img" /></a>
                                            <div class="widget-posts-descr">
                                                <a href="{!! route('shop-single') !!}" title="">Shirt With Mesh Sleeves</a>
                                                <div>
                                                    <a href="{!! route('shop-single') !!}"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End Preview item -->
                                    </ul>
                                    <div class="clearfix m-t-20">
                                        <div class="left m-b-10">
                                            Subtotal: <strong>$35.00</strong>
                                        </div>
                                        <div class="right">
                                            <a href="{!! route('shop-single') !!}" class="btn btn-theme">View Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Widget -->

                            <!-- Widget -->
                            <div class="widget sidebar-widget">
                                <h4>Filter by price</h4>
                                <div class="widget-body">
                                    <form method="post" action="{!! route('shop-single') !!}" class="form">
                                        <div class="row mb-20">
                                            <div class="col-xs-6">
                                                <input type="text" name="price-from" id="price-from" class="input-md round form-control" placeholder="From, $" maxlength="100">
                                            </div>
                                            <div class="col-xs-6">
                                                <input type="text" name="price-to" id="price-to" class="input-md round form-control" placeholder="To, $" maxlength="100">
                                            </div>
                                        </div>
                                        <button class="btn btn-theme">Filter</button>
                                    </form>
                                </div>
                            </div>
                            <!-- End Widget -->

                            <!-- Widget -->
                            <div class="widget sidebar-widget categories">
                                <h4>Shop Categories</h4>
                                <div class="widget-body">
                                    <ul class="clearlist">
                                        <li><a href="{!! route('shop-single') !!}" title=""><i class="fa fa-angle-right"></i>Branding</a></li>
                                        <li><a href="{!! route('shop-single') !!}" title=""><i class="fa fa-angle-right"></i>Design</a></li>
                                        <li><a href="{!! route('shop-single') !!}" title=""><i class="fa fa-angle-right"></i>Development</a></li>
                                        <li><a href="{!! route('shop-single') !!}" title=""><i class="fa fa-angle-right"></i>Photography</a></li>
                                        <li><a href="{!! route('shop-single') !!}" title=""><i class="fa fa-angle-right"></i>Other</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Widget -->
                            <div class="widget sidebar-widget ">
                                <h4 class="title">Tags</h4>
                                <div class="widget-tagcloud">
                                    <a href="{!! route('shop-single') !!}" class="tag-link">clean <span>(254)</span></a>
                                    <a href="{!! route('shop-single') !!}" class="tag-link">portfolio <span>(197)</span></a>
                                    <a href="{!! route('shop-single') !!}" class="tag-link">responsive <span>(78)</span></a>
                                    <a href="{!! route('shop-single') !!}" class="tag-link">seo <span>(133)</span></a>
                                    <a href="{!! route('shop-single') !!}" class="tag-link">modern <span>(239)</span></a>
                                    <a href="{!! route('shop-single') !!}" class="tag-link">business <span>(94)</span></a>
                                    <a href="{!! route('shop-single') !!}" class="tag-link">css3 <span>(1,632)</span></a>
                                    <a href="{!! route('shop-single') !!}" class="tag-link">corporate <span>(985)</span></a>
                                    <a href="{!! route('shop-single') !!}" class="tag-link">creative <span>(329)</span></a>
                                    <a href="{!! route('shop-single') !!}" class="tag-link">html5 <span>(761)</span></a>
                                    <a href="{!! route('shop-single') !!}" class="tag-link">rtl <span>(387)</span></a>
                                    <a href="{!! route('shop-single') !!}" class="tag-link">wordpress <span>(2,948)</span></a>
                                    <a href="{!! route('shop-single') !!}" class="tag-link">minimal <span>(651)</span></a>
                                </div>
                            </div>
                            <!-- End Widget -->
                        </div>
                        <!-- End Sidebar -->
                    </div>
                    <!-- End Content -->
                </div>
            </div>
        </section>
        <!-- Shop single Section End Here-->

@stop