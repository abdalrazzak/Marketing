<header class="header-section" id="home" >
    <div class="navbar navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{!! route('home') !!}">
                    <div class="logo-text"><span><samp>M</samp>Mar</span>keting</div>
                    <!-- <img src="images/logo.png" alt="logo"> -->
                </a>
                <div class="header-right-toggle pull-right hidden-md hidden-lg">
                    <a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <nav class="main-navigation text-left pull-right hidden-xs hidden-sm">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{!! route('home') !!}">Home</a></li>
                    <li><a href="{!! route('pages.view',['categories']) !!}" class="has-submenu">Categories</a>


                    </li>
                    <li><a href="{!! route('pages.view',['contact']) !!}">Contact us</a></li>
                    <li><a href="{!! route('shop.home') !!}">Shop</a></li>
                    @if(Auth::user())
                        <li><a href="{!! route('logout') !!}">Logout</a></li>
                    @else
                        <li><a href="{!! route('login') !!}">Login</a></li>
                    @endif
                    <li><a href="{!! route('pages.view',['cart']) !!}" class="btn-theme btn">
                            <i class="fa fa-shopping-cart "></i>
                            <span class="count cartIcon">
                                @if(Session::has('cart'))
                                    <?php
                                        $count=0;
                                        $cart =Session::get('cart');
                                        foreach ($cart as $productArray)
                                            {
                                               $count+=$productArray['count'];
                                            }
                                            echo $count;
                                    ?>
                                @else
                                    0
                                @endif
                                        </span>
                        </a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- Header Section End Here -->
