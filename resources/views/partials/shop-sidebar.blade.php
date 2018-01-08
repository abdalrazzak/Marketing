<!-- Sidebar -->
<div id="side-bar" class="col-sm-4 col-md-4 m-t-40 m-b-40">
    <!-- Widget -->
    <div class="widget sidebar-widget">
        <h4>Shopping Cart</h4>
        <div class="widget-body">
            <ul class="clearlist widget-posts">
                <!-- Preview item -->
                <li class="clearfix">
                    <a href=""><img src="bizstart/images/shop/shop-01.jpg" alt="" class="widget-posts-img" /></a>
                    <div class="widget-posts-descr">
                        <a href="" title="">Polo Shirt With Argyle</a>
                        <div>
                            <a href=""><i class="fa fa-times"></i> Remove</a>
                        </div>
                    </div>
                </li>
                <!-- End Preview item -->

                <!-- Preview item -->
                <li class="clearfix">
                    <a href=""><img src="bizstart/images/shop/shop-02.jpg" alt="" class="widget-posts-img" /></a>
                    <div class="widget-posts-descr">
                        <a href="" title="">Shirt With Mesh Sleeves</a>
                        <div>
                            <a href=""><i class="fa fa-times"></i> Remove</a>
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
                    <a href="" class="btn btn-theme">View Cart</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Widget -->

    <!-- Widget -->
    <div class="widget sidebar-widget">
        <h4>Filter by price</h4>
        <div class="widget-body">
            <form method="post" action="" class="form">
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
    @if($categories)
    <div class="widget sidebar-widget categories">
        <h4>Shop Categories</h4>
        <div class="widget-body">
            <ul class="clearlist">
                @foreach($categories as $category)
                <li>
                    <a href="{!! route('shop.category', [$category->id]) !!}" title="">
                        <i class="fa fa-angle-right"></i>{!! $category->name !!}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
    <!-- Widget -->
    <div class="widget sidebar-widget ">
        <h4 class="title">Tags</h4>
        <div class="widget-tagcloud">
            <a href="" class="tag-link">clean <span>(254)</span></a>
            <a href="" class="tag-link">portfolio <span>(197)</span></a>
            <a href="" class="tag-link">responsive <span>(78)</span></a>
            <a href="" class="tag-link">seo <span>(133)</span></a>
            <a href="" class="tag-link">modern <span>(239)</span></a>
            <a href="" class="tag-link">business <span>(94)</span></a>
            <a href="" class="tag-link">css3 <span>(1,632)</span></a>
            <a href="" class="tag-link">corporate <span>(985)</span></a>
            <a href="" class="tag-link">creative <span>(329)</span></a>
            <a href="" class="tag-link">html5 <span>(761)</span></a>
            <a href="" class="tag-link">rtl <span>(387)</span></a>
            <a href="" class="tag-link">wordpress <span>(2,948)</span></a>
            <a href="" class="tag-link">minimal <span>(651)</span></a>
        </div>
    </div>
    <!-- End Widget -->
</div>
<!-- End Sidebar -->