<!DOCTYPE html>
<html lang="en">

<@include('layouts.partials.header')

<body class="" style="">
<div class="page-wrapper">
    <header class="header header-6">
        {{--<div class="header-top">
            <div class="container">
                <!-- End .header-left -->

                <div class="header-right">
                    <!-- End .soial-icons -->
                    <ul class="top-menu top-link-menu">
                        <li>
                            <a href="#">Links</a>
                            <ul>
                                <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a></li>
                            </ul>
                        </li>
                    </ul><!-- End .top-menu -->

                    <!-- End .header-dropdown -->

                    <!-- End .header-dropdown -->
                </div><!-- End .header-right -->
            </div>
        </div>--}}
        <div class="header-middle">
            <div class="container">
                <div class="header-left">
                    <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                        <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                        <form action="{{route('search.products')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="header-search-wrapper search-wrapper-wide">
                                <label for="q" class="sr-only">Search</label>
                                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                <input type="search" name="search" class="form-control"  id="q"
                                       placeholder="Search product ..." required>
                            </div><!-- End .header-search-wrapper -->
                        </form>
                    </div><!-- End .header-search -->
                </div>
                <div class="header-center">

                </div><!-- End .header-left -->
                <div class="header-right">
                    @if(session('user_id'))
                        <nav class="main-nav">
                            <ul class="menu sf-arrows sf-js-enabled" style="touch-action: auto;">

                                <li class="">
                                    <a>Product type</a>

                                    <ul style="display: none;">
                                        <div class="product">
                                            <a href="/shop/tops"><span class="cart-txt">Tops</span></a>
                                        </div>
                                        <div class="product">
                                            <a href="/shop/bottoms"><span class="cart-txt">Bottoms</span></a>
                                        </div>
                                        <div class="product">
                                            <a href="/shop/shoes"><span class="cart-txt">Shoes</span></a>
                                        </div>


                                    </ul>
                                </li>

                            </ul><!-- End .menu -->
                        </nav>
                        <a href="wishlist.html" class="wishlist-link">
                            <i class="icon-heart-o"></i>
                            <span class="wishlist-count">3</span>
                            <span class="wishlist-txt">My Wishlist</span>
                        </a>
                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart"></i>
                                <span class="cart-count">0</span>
                                <span class="cart-txt">$ 164,00</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="/product-detail">Beige knitted elastic runner shoes</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $84.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="/product-detail" class="product-image">
                                                <img src="{{asset('assets/images/products/cart/product-1.jpg')}}"
                                                     alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="/product-detail">Blue utility pinafore denim dress</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $76.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="/product-detail" class="product-image">
                                                <img src="{{asset('assets/images/products/cart/product-2.jpg')}}"
                                                     alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price">$160.00</span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="/shopping-cart" class="btn btn-primary">View Cart</a>
                                    <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i
                                            class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->

                        </div><!-- End .cart-dropdown -->
                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-user"></i>
                                <span class="cart-txt">{{explode(" ", $res['name'])[0]}}</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                    <div class="product">
                                        <a href="{{route('edit.profile')}}"><span
                                                class="cart-txt">Edit Profile</span></a>
                                    </div><!-- End .product -->
                                    @if($res['user_roles'] == "vendor")
                                        <div class="product">
                                            <a href="{{route('show.products')}}"><span
                                                    class="cart-txt">My Products</span></a>
                                        </div><!-- End .product -->
                                    @endif
                                    @if($res['user_roles'] == "user")
                                        <div class="product">
                                            <a href="{{route('upgrade.account')}}"><span class="cart-txt">Upgrade Account</span></a>
                                        </div><!-- End .product -->
                                    @endif
                                    @if($res['user_roles'] == "premiumuser")
                                        <div class="product">
                                            <a href="#"><span class="cart-txt"><i class="fa-chess-king"></i>Premium Account</span></a>
                                        </div><!-- End .product -->
                                    @endif
                                    <div class="product">
                                        <a href="{{route('logout')}}"><span class="cart-txt">Logout</span></a>
                                    </div><!-- End .product -->
                                </div><!-- End .cart-product -->

                            </div><!-- End .dropdown-menu -->

                        </div><!-- End .cart-dropdown -->
                    @else
                        <a href="#signin-modal" data-toggle="modal" class="wishlist-link">
                            <span class="wishlist-txt"><i class="icon-user"></i>Login</span>
                        </a>
                    @endif
                </div>
            </div><!-- End .container -->
        </div><!-- End .header-middle -->

        <!-- End .header-bottom -->
    </header><!-- End .header -->
    @yield('content')
    @include('layouts.partials.js-imports')
    @include('layouts.partials.sign-up-modal')
</body>

</html>

