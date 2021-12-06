<!DOCTYPE html>
<html lang="en">

@include('layouts.partials.header')

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
                                <input type="search" name="search" class="form-control" id="q"
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
                                <span class="cart-count">{{count($cart)}}</span>
                                <{{--span class="cart-txt">$ 164,00</span>--}}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                    @php $total_price = 0; @endphp
                                    @foreach($cart as $c)
                                        @php $total_price+=$c['price'] * $c['cart_qty'] @endphp
                                        <div class="product">
                                            <div class="product-cart-details">
                                                <h4 class="product-title">
                                                    <a href="/product-detail">{{$c['product_name']}}</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                <span class="cart-product-qty">{{$c['cart_qty']}}</span>
                                                x ${{number_format((float)$c['price'], 2, '.', '')}}
                                            </span>
                                            </div><!-- End .product-cart-details -->

                                            <figure class="product-image-container">
                                                <a href="/product-detail" class="product-image">
                                                    <img src="{{asset('assets/images/'.$c['product_image'])}}"
                                                         alt="product">
                                                </a>
                                            </figure>
                                            <a href="#" class="btn-remove" title="Remove Product"><i
                                                    class="icon-close"></i></a>
                                        </div><!-- End .product -->
                                    @endforeach
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price">${{number_format((float)$total_price, 2, '.', '')}}</span>
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

    @if((session('user_id') && $res['user_roles'] == "user") || !session('user_id'))
        <div class="container">
            <div class="heading heading-flex mb-3">
                <!-- <div class="heading-left">
                    <h2 class="title">Trending Now</h2>
                    <!-- End .title -->
                <!-- </div> -->
                <!-- End .heading-left -->

                <div class="heading-right">
                    <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="trending-women-link" data-toggle="tab"
                               href="#trending-women-tab"
                               role="tab" aria-controls="trending-women-tab" aria-selected="true">Bottoms</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" id="trending-men-link" data-toggle="tab" href="#trending-men-tab" role="tab" aria-controls="trending-men-tab" aria-selected="false">Men's Clothing</a>
                        </li> -->
                    </ul>
                </div><!-- End .heading-right -->
            </div><!-- End .heading -->

            <div class="tab-content tab-content-carousel">
                <div class="tab-pane p-0 fade active show" id="trending-women-tab" role="tabpanel"
                     aria-labelledby="trending-women-link">
                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow owl-loaded owl-drag"
                         data-toggle="owl" data-owl-options="{
                                    &quot;nav&quot;: false,
                                    &quot;dots&quot;: true,
                                    &quot;margin&quot;: 20,
                                    &quot;loop&quot;: false,
                                    &quot;responsive&quot;: {
                                        &quot;0&quot;: {
                                            &quot;items&quot;:2
                                        },
                                        &quot;480&quot;: {
                                            &quot;items&quot;:2
                                        },
                                        &quot;768&quot;: {
                                            &quot;items&quot;:3
                                        },
                                        &quot;992&quot;: {
                                            &quot;items&quot;:4
                                        },
                                        &quot;1200&quot;: {
                                            &quot;items&quot;:4,
                                            &quot;dots&quot;: false
                                        }
                                    }
                                }">
                        <!-- End .product -->

                        <!-- End .product -->

                        <!-- End .product -->

                        <!-- End .product -->

                        <!-- End .product -->
                        <div class="owl-stage-outer" id="product_container">
                            <div class="owl-stage"
                                 style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1338px;">
                            {{--                                @dd($products)--}}
                            @yield('content')


                            <!-- End .footer -->
                            </div><!-- End .page-wrapper -->
                            @elseif(session('user_id'))
                                <div class="container">
                                    <div class="heading heading-flex mb-3">

                                        <div class="heading-right">
                                            <ul class="nav nav-pills nav-border-anim justify-content-center"
                                                role="tablist">

                                                <li class="nav-item">
                                                    <a class="nav-link active" id="trending-women-link"
                                                       data-toggle="tab" href="#trending-women-tab"
                                                       role="tab" aria-controls="trending-women-tab"
                                                       aria-selected="true">My products</a>
                                                </li>

                                                <!-- <li class="nav-item">
                                                    <a class="nav-link" id="trending-men-link" data-toggle="tab" href="#trending-men-tab" role="tab" aria-controls="trending-men-tab" aria-selected="false">Men's Clothing</a>
                                                </li> -->
                                            </ul>
                                        </div><!-- End .heading-right -->
                                    </div><!-- End .heading -->

                                    <div class="tab-content tab-content-carousel">
                                        <div class="tab-pane p-0 fade active show" id="trending-women-tab"
                                             role="tabpanel"
                                             aria-labelledby="trending-women-link">
                                            <div
                                                class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow owl-loaded owl-drag"
                                                data-toggle="owl" data-owl-options="{
                                    &quot;nav&quot;: false,
                                    &quot;dots&quot;: true,
                                    &quot;margin&quot;: 20,
                                    &quot;loop&quot;: false,
                                    &quot;responsive&quot;: {
                                        &quot;0&quot;: {
                                            &quot;items&quot;:2
                                        },
                                        &quot;480&quot;: {
                                            &quot;items&quot;:2
                                        },
                                        &quot;768&quot;: {
                                            &quot;items&quot;:3
                                        },
                                        &quot;992&quot;: {
                                            &quot;items&quot;:4
                                        },
                                        &quot;1200&quot;: {
                                            &quot;items&quot;:4,
                                            &quot;dots&quot;: false
                                        }
                                    }
                                }">
                                                <div class="owl-stage-outer">
                                                    <div class="owl-stage"
                                                         style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1338px;">
                                                        @foreach($products as $product)
                                                            <div class="owl-item active"
                                                                 style="width: 247.6px; margin-right: 20px;">
                                                                <div class="product product-7 text-center">
                                                                    <figure class="product-media">
                                                                        <a href="{{route('shop.product.detail', $product['product_id'])}}">
                                                                            <img
                                                                                src="{{asset('assets/images/'.$product['product_image'])}}"
                                                                                alt="Product image"
                                                                                class="product-image">
                                                                            <!-- <img src="assets/images/demos/demo-9/products/product-1-2.jpg" alt="Product image" class="product-image-hover"> -->
                                                                        </a>

                                                                        <div class="product-action-vertical">
                                                                            <!-- <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a> -->
                                                                            <a href="popup/quickView.html"
                                                                               class="btn-product-icon btn-quickview"
                                                                               title="Quick view"><span>Quick view</span></a>
                                                                        </div><!-- End .product-action-vertical -->

                                                                        <div class="product-action">
                                                                            <a href="#"
                                                                               class="btn-product btn-cart"><span>add to cart</span></a>
                                                                        </div><!-- End .product-action -->
                                                                    </figure><!-- End .product-media -->

                                                                    <div class="product-body">

                                                                        <h3 class="product-title"><a
                                                                                href="{{route('shop.product.detail', $product['product_id'])}}">{{$product['product_name']}}</a>
                                                                        </h3>
                                                                        <!-- End .product-title -->
                                                                        <div class="product-price">
                                                                            ${{number_format((float)$product['price'], 2, '.', '')}}
                                                                        </div><!-- End .product-price -->

                                                                        <div class="ratings-container">
                                                                            <div class="ratings">
                                                                                <div class="ratings-val"
                                                                                     style="width: 100%;"></div>
                                                                                <!-- End .ratings-val -->
                                                                            </div><!-- End .ratings -->
                                                                            <span
                                                                                class="ratings-text">( 6 Reviews )</span>
                                                                        </div><!-- End .rating-container -->
                                                                    </div><!-- End .product-body -->
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <!-- <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="icon-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="icon-angle-right"></i></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div> -->
                                                <!-- End .owl-carousel -->
                                            </div><!-- .End .tab-pane -->
                                            <div class="tab-pane p-0 fade" id="trending-men-tab" role="tabpanel"
                                                 aria-labelledby="trending-men-link">
                                                <div
                                                    class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow owl-loaded owl-drag"
                                                    data-toggle="owl" data-owl-options="{
                                    &quot;nav&quot;: false,
                                    &quot;dots&quot;: true,
                                    &quot;margin&quot;: 20,
                                    &quot;loop&quot;: false,
                                    &quot;responsive&quot;: {
                                        &quot;0&quot;: {
                                            &quot;items&quot;:2
                                        },
                                        &quot;480&quot;: {
                                            &quot;items&quot;:2
                                        },
                                        &quot;768&quot;: {
                                            &quot;items&quot;:3
                                        },
                                        &quot;992&quot;: {
                                            &quot;items&quot;:4
                                        },
                                        &quot;1200&quot;: {
                                            &quot;items&quot;:4,
                                            &quot;dots&quot;: false
                                        }
                                    }
                                }">

                                                    <div class="owl-stage-outer">
                                                        <div class="owl-stage"></div>
                                                    </div>
                                                    <div class="owl-nav disabled">
                                                        <button type="button" role="presentation" class="owl-prev"><i
                                                                class="icon-angle-left"></i>
                                                        </button>
                                                        <button type="button" role="presentation" class="owl-next"><i
                                                                class="icon-angle-right"></i>
                                                        </button>
                                                    </div>
                                                    <div class="owl-dots disabled"></div>
                                                </div><!-- End .owl-carousel -->
                                            </div><!-- .End .tab-pane -->
                                        </div><!-- End .tab-content -->
                                    </div>

                                    <!-- End .main -->

                                    <!-- End .footer -->
                                </div><!-- End .page-wrapper -->
                            @endif

                            <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up">Back to Top</i>
                            </button>
                            @include('layouts.partials.success-modal')

                            <!-- End .main -->

                            <!-- End .footer -->
                        </div><!-- End .page-wrapper -->
                        <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

                        <!-- Mobile Menu -->
                        <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

                        <div class="mobile-menu-container">
                            <div class="mobile-menu-wrapper">
                                <span class="mobile-menu-close"><i class="icon-close"></i></span>

                                <form action="#" method="get" class="mobile-search">
                                    <label for="mobile-search" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="mobile-search" id="mobile-search"
                                           placeholder="Search in..."
                                           required="">
                                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                </form>

                                <nav class="mobile-nav">
                                    <ul class="mobile-menu">
                                        <li class="active">
                                            <a href="index.html">Home<span class="mmenu-btn"></span><span
                                                    class="mmenu-btn"></span><span
                                                    class="mmenu-btn"></span></a>

                                            <ul>
                                                <li><a href="index-1.html">01 - furniture store</a></li>
                                                <li><a href="index-2.html">02 - furniture store</a></li>
                                                <li><a href="index-3.html">03 - electronic store</a></li>
                                                <li><a href="index-4.html">04 - electronic store</a></li>
                                                <li><a href="index-5.html">05 - fashion store</a></li>
                                                <li><a href="index-6.html">06 - fashion store</a></li>
                                                <li><a href="index-7.html">07 - fashion store</a></li>
                                                <li><a href="index-8.html">08 - fashion store</a></li>
                                                <li><a href="index-9.html">09 - fashion store</a></li>
                                                <li><a href="index-10.html">10 - shoes store</a></li>
                                                <li><a href="index-11.html">11 - furniture simple store</a></li>
                                                <li><a href="index-12.html">12 - fashion simple store</a></li>
                                                <li><a href="index-13.html">13 - market</a></li>
                                                <li><a href="index-14.html">14 - market fullwidth</a></li>
                                                <li><a href="index-15.html">15 - lookbook 1</a></li>
                                                <li><a href="index-16.html">16 - lookbook 2</a></li>
                                                <li><a href="index-17.html">17 - fashion store</a></li>
                                                <li><a href="index-18.html">18 - fashion store (with sidebar)</a></li>
                                                <li><a href="index-19.html">19 - games store</a></li>
                                                <li><a href="index-20.html">20 - book store</a></li>
                                                <li><a href="index-21.html">21 - sport store</a></li>
                                                <li><a href="index-22.html">22 - tools store</a></li>
                                                <li><a href="index-23.html">23 - fashion left navigation store</a></li>
                                                <li><a href="index-24.html">24 - extreme sport store</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="category.html">Shop<span class="mmenu-btn"></span><span
                                                    class="mmenu-btn"></span><span
                                                    class="mmenu-btn"></span></a>
                                            <ul>
                                                <li><a href="category-list.html">Shop List</a></li>
                                                <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                                                <li><a href="category.html">Shop Grid 3 Columns</a></li>
                                                <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                                                <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span
                                                                class="tip tip-hot">Hot</span></span></a></li>
                                                <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                                                <li><a href="product-category-boxed.html">Product Category Boxed</a>
                                                </li>
                                                <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span
                                                                class="tip tip-new">New</span></span></a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="#">Lookbook</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/product-detail" class="sf-with-ul">Product<span
                                                    class="mmenu-btn"></span><span
                                                    class="mmenu-btn"></span><span class="mmenu-btn"></span></a>
                                            <ul>
                                                <li><a href="/product-detail">Default</a></li>
                                                <li><a href="product-centered.html">Centered</a></li>
                                                <li><a href="product-extended.html"><span>Extended Info<span
                                                                class="tip tip-new">New</span></span></a></li>
                                                <li><a href="product-gallery.html">Gallery</a></li>
                                                <li><a href="product-sticky.html">Sticky Info</a></li>
                                                <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                                                <li><a href="product-fullwidth.html">Full Width</a></li>
                                                <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Pages<span class="mmenu-btn"></span><span
                                                    class="mmenu-btn"></span><span
                                                    class="mmenu-btn"></span></a>
                                            <ul>
                                                <li>
                                                    <a href="about.html">About<span class="mmenu-btn"></span><span
                                                            class="mmenu-btn"></span><span class="mmenu-btn"></span></a>

                                                    <ul>
                                                        <li><a href="about.html">About 01</a></li>
                                                        <li><a href="about-2.html">About 02</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="contact.html">Contact<span class="mmenu-btn"></span><span
                                                            class="mmenu-btn"></span><span
                                                            class="mmenu-btn"></span></a>

                                                    <ul>
                                                        <li><a href="contact.html">Contact 01</a></li>
                                                        <li><a href="contact-2.html">Contact 02</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="faq.html">FAQs</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="blog.html">Blog<span class="mmenu-btn"></span><span
                                                    class="mmenu-btn"></span><span
                                                    class="mmenu-btn"></span></a>

                                            <ul>
                                                <li><a href="blog.html">Classic</a></li>
                                                <li><a href="blog-listing.html">Listing</a></li>
                                                <li>
                                                    <a href="#">Grid<span class="mmenu-btn"></span><span
                                                            class="mmenu-btn"></span><span
                                                            class="mmenu-btn"></span></a>
                                                    <ul>
                                                        <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                                        <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                                        <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                                        <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Masonry<span class="mmenu-btn"></span><span
                                                            class="mmenu-btn"></span><span
                                                            class="mmenu-btn"></span></a>
                                                    <ul>
                                                        <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                                        <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                                        <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                                        <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Mask<span class="mmenu-btn"></span><span
                                                            class="mmenu-btn"></span><span
                                                            class="mmenu-btn"></span></a>
                                                    <ul>
                                                        <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                                        <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Single Post<span class="mmenu-btn"></span><span
                                                            class="mmenu-btn"></span><span
                                                            class="mmenu-btn"></span></a>
                                                    <ul>
                                                        <li><a href="single.html">Default with sidebar</a></li>
                                                        <li><a href="single-fullwidth.html">Fullwidth no sidebar</a>
                                                        </li>
                                                        <li><a href="single-fullwidth-sidebar.html">Fullwidth with
                                                                sidebar</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="elements-list.html">Elements<span class="mmenu-btn"></span><span
                                                    class="mmenu-btn"></span><span class="mmenu-btn"></span></a>
                                            <ul>
                                                <li><a href="elements-products.html">Products</a></li>
                                                <li><a href="elements-typography.html">Typography</a></li>
                                                <li><a href="elements-titles.html">Titles</a></li>
                                                <li><a href="elements-banners.html">Banners</a></li>
                                                <li><a href="elements-product-category.html">Product Category</a></li>
                                                <li><a href="elements-video-banners.html">Video Banners</a></li>
                                                <li><a href="elements-buttons.html">Buttons</a></li>
                                                <li><a href="elements-accordions.html">Accordions</a></li>
                                                <li><a href="elements-tabs.html">Tabs</a></li>
                                                <li><a href="elements-testimonials.html">Testimonials</a></li>
                                                <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                                                <li><a href="elements-portfolio.html">Portfolio</a></li>
                                                <li><a href="elements-cta.html">Call to Action</a></li>
                                                <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav><!-- End .mobile-nav -->

                                <div class="social-icons">
                                    <a href="#" class="social-icon" target="_blank" title="Facebook"><i
                                            class="icon-facebook-f"></i></a>
                                    <a href="#" class="social-icon" target="_blank" title="Twitter"><i
                                            class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon" target="_blank" title="Instagram"><i
                                            class="icon-instagram"></i></a>
                                    <a href="#" class="social-icon" target="_blank" title="Youtube"><i
                                            class="icon-youtube"></i></a>
                                </div><!-- End .social-icons -->
                            </div><!-- End .mobile-menu-wrapper -->
                        </div><!-- End .mobile-menu-container -->

                    @include('layouts.partials.sign-up-modal')
                        <script>
                            const add_cart = document.querySelector('.owl-stage-outer');
                            const success_modal = document.getElementById('success_modal');
                            const dropdown_cart = document.querySelector('.dropdown-cart-products');
                            const addToCart = async function(e){
                                console.log(e.target);
                                if(e.target.classList.contains('add_cart') || e.target.parentElement.classList.contains('add_cart'))
                                {
                                    const id = e.target.getAttribute('data-id');
                                    const data = {
                                        id,
                                        qty : 1
                                    };
                                    const uri = `/add-to-cart`;
                                    const options = {
                                        method: 'POST',
                                        headers: {
                                            'Content-type': 'application/json',
                                            'X-CSRF-Token': '{{csrf_token()}}'
                                        },
                                        body: JSON.stringify(data),
                                    };

                                    try {
                                        const response = await fetch(uri, options);
                                        const discount = await response.json();
                                        if(discount.success){
                                            success_modal.click();
                                        }
                                        if (discount.fail) {
                                            alert('failed to apply promocode');
                                        }
                                    }
                                    catch(err) {
                                        console.log(err);
                                        alert('failed to add to cart');
                                    }
                                }
                            }
                            // console.log(add_cart);
                            add_cart.addEventListener('click', addToCart);
                        </script>
                    <!-- Plugins JS File -->
                        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
                        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
                        <script src="{{asset('assets/js/jquery.hoverIntent.min.js')}}"></script>
                        <script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
                        <script src="{{asset('assets/js/superfish.min.js')}}"></script>
                        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
                        <script src="{{asset('assets/js/bootstrap-input-spinner.js')}}"></script>
                        <script src="{{asset('assets/js/jquery.plugin.min.js')}}"></script>
                        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
                        <script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
                        <!-- Main JS File -->
                        <script src="{{asset('assets/js/main.js')}}"></script>
                        <script src="{{asset('assets/js/demos/demo-9.js')}}"></script>


                        <!-- molla/index-9.html  22 Nov 2019 09:58:03 GMT -->


</body>

</html>
