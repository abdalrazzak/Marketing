@extends('layouts.master')
@section('ribbon')
    <!-- Page Header Start Here -->
    <section class="page-header">
        <div class="product-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <h2 class="p-tb-10">Checkout</h2>
                    </div>
                    <div class="col-md-3 m-t-15">
                        <a href="{!! route('home') !!}">Home</a> <i class="fa fa-angle-double-right"></i>
                        <a href="">Cart</a>
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
        <section class="main-contents section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form action="" class="shopping-cart row">
                            <div class=" col-md-5">
                                <div class="cart-next-step">
                                    <h4>What would you like to do next</h4>
                                    <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
                                    <div class="input-container">
                                        <input type="radio" id="use-copon-code" name="cart-next-step">
                                        <label for="use-copon-code">Use Copon Code</label>
                                    </div><!-- /input-container -->
                                    <div class="input-container">
                                        <input type="radio" id="use-gift-voucher" name="cart-next-step">
                                        <label for="use-gift-voucher">Use Gift Voucher</label>
                                    </div><!-- /input-container -->
                                    <div class="input-container">
                                        <input type="radio" id="estimate-cart" name="cart-next-step">
                                        <label for="estimate-cart">Estimate Shipping &amp; Taxes</label>
                                    </div><!-- /input-container -->
                                </div><!-- /cart-next-step -->
                            </div>
                            <?php $cart = Session::get('cart'); ?>
                            @if($cart && count($cart))
                            <div class="col-md-7">

                                <table class="shopping-cart-table">
                                    <thead>
                                    <tr>
                                        <th class="product-image">Item</th>
                                        <th class="product-name">Item Name</th>
                                        <th>Count</th>
                                        <th>Unit Price</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($cart as $productArray)
                                        <tr id="productRow{!! $productArray['product']->id !!}">
                                            <td data-th="Images" class="product-image">
                                                <img alt="Knight Shopping Cart" src="bizstart/images/projects/1.jpg">
                                            </td>
                                            <td data-th="Product Name" class="product-name">
                                                <h6 class="heading-alt-style9">
                                                    {!! $productArray['product']->name !!}
                                                </h6>
                                            </td>
                                            <td>
                                                <input type="number" data-id="{!! $productArray['product']->id !!}" min='1' class="form-control" id="quantity" value="{!! $productArray['count'] !!}">
                                            </td>
                                            <td data-th="Unit Price">
                                                {!! $productArray['product']->price ? $productArray['product']->price : '' !!}
                                            </td>
                                            <td class="total" data-th="Total">
                                                {!! $productArray['product']->price * $productArray['count'] !!}
                                            </td>
                                            <td>
                                                <a href="#" data-id="{!! $productArray['product']->id !!}" class="deleteProductBtn">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="cart-totals-container clearfix">
                                    <div class="pull-right">
                                        <p>Total: <span>
                                                <?php $total = 0;
                                                foreach ($cart as $productArray)
                                                    {
                                                        $total+=$productArray['count']*$productArray['product']->price ;
                                                    }
                                                    echo $total;
                                                ?>


                                            </span></p>
                                    </div><!-- /pull-right -->
                                </div><!-- /cart-totals-container -->
                            </div>
                            @endif

                            <div class="col-md-12">
                                <div class="align-left">
                                    <a class="btn btn-theme" href="">
                                        <span>Checkout</span>
                                    </a>
                                    <a class="btn btn-theme theme-red " href="{!! route('shop.home') !!}">
                                        <span>Continue Shopping</span>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Main Section Start Here -->
    @stop

@section('scripts')
    <script>
        $(function () {
            $('.deleteProductBtn').on('click', function () {
                var id = $(this).data('id');
                var url = '{!! route('shop.product.delete') !!}';
                $.ajax({
                    method: 'post',
                    url: url,
                    dataType: 'json',
                    data: {productId: id},
                    success: function (response) {
                        $('.cartIcon').text(response.count)
                        $('#productRow'+id).slideUp();
                    },
                    error: function (xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });
            $('#quantity').change(function () {
               var id =$(this).data('id');
               var val = $(this).val();
               $.ajax({
                   method :'post',
                   url :'{!! route('shop.product.inc-dec') !!}',
                   dataType :'json',
                   data : {productId:id,val:val},
                   success : function (response) {
                       $('.cartIcon').text(response.count);
                       $('.total').text(response.total)
                   },
                   error :function (xhr) {

                   }
               });

            });
        });
    </script>
@stop