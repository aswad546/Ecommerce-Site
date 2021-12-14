@extends('layouts.home-page-master')
@section('content')
@if((session('user_id') && ($res['user_roles'] == "user" || $res['user_roles'] == "premiumuser")) || !session('user_id'))
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
                        <a class="nav-link active" id="trending-women-link" data-toggle="tab" href="#trending-women-tab"
                           role="tab" aria-controls="trending-women-tab" aria-selected="true">Latest Trends</a>
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
                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                             style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1338px;">
                            <div class="owl-item active" style="width: 247.6px; margin-right: 20px;">
                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <a href="/product-detail">
                                            <img src="assets/images/demos/demo-9/products/product-1-1.jpg"
                                                 alt="Product image" class="product-image">
                                            <!-- <img src="assets/images/demos/demo-9/products/product-1-2.jpg" alt="Product image" class="product-image-hover"> -->
                                        </a>

                                        <div class="product-action-vertical">
                                            <!-- <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a> -->
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                               title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="product.html">Denim jacket</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $19.99
                                        </div><!-- End .product-price -->

                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div>
                                                <!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 6 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <!-- <div class="product-nav product-nav-thumbs">
                                            <a href="#" class="active">
                                                <img src="assets/images/demos/demo-9/products/product-1-thumb.jpg" alt="product desc">
                                            </a>
                                            <a href="#">
                                                <img src="assets/images/demos/demo-9/products/product-1-2-thumb.jpg" alt="product desc">
                                            </a>
                                            <a href="#">
                                                <img src="assets/images/demos/demo-9/products/product-1-3-thumb.jpg" alt="product desc">
                                            </a> -->
                                        <!-- </div>  -->
                                        <!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 247.6px; margin-right: 20px;">
                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-9/products/product-2-1.jpg"
                                                 alt="Product image" class="product-image">
                                            <!-- <img src="assets/images/demos/demo-9/products/product-2-2.jpg" alt="Product image" class="product-image-hover"> -->
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                               title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="/product-detail">Sandals</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $24.99
                                        </div><!-- End .product-price -->

                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 60%;"></div>
                                                <!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 247.6px; margin-right: 20px;">
                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <!-- <span class="product-label label-sale">sale</span> -->
                                        <a href="/product-detail">
                                            <img src="assets/images/demos/demo-9/products/product-3-1.jpg"
                                                 alt="Product image" class="product-image">
                                            <!-- <img src="assets/images/demos/demo-9/products/product-3-2.jpg" alt="Product image" class="product-image-hover"> -->
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                               title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="/product-detail">Printed sweatshirt</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $12.99
                                            <!-- <span class="new-price">Now $7.99</span> -->
                                            <!-- <span class="old-price">Was $12.99</span> -->
                                        </div><!-- End .product-price -->

                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 60%;"></div>
                                                <!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 3 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 247.6px; margin-right: 20px;">
                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <a href="/product-detail">
                                            <img src="assets/images/demos/demo-9/products/product-4-1.jpg"
                                                 alt="Product image" class="product-image">
                                            <!-- <img src="assets/images/demos/demo-9/products/product-4-2.jpg" alt="Product image" class="product-image-hover"> -->
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                               title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="/product-detail">Linen-blend paper bag
                                                trousers</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $17.99
                                        </div><!-- End .product-price -->

                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div>
                                                <!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <!-- <div class="product-nav product-nav-thumbs">
                                            <a href="#" class="active">
                                                <img src="assets/images/demos/demo-9/products/product-4-thumb.jpg" alt="product desc">
                                            </a>
                                            <a href="#">
                                                <img src="assets/images/demos/demo-9/products/product-4-2-thumb.jpg" alt="product desc">
                                            </a>
                                        </div> -->
                                        <!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                </div>
                            </div>
                            <div class="owl-item" style="width: 247.6px; margin-right: 20px;">
                                <div class="product product-7 text-center">
                                    <!-- <figure class="product-media"> -->
                                    <!-- <a href="product.html">
                                        <img src="assets/images/demos/demo-9/products/product-1-1.jpg" alt="Product image" class="product-image">
                                        <img src="assets/images/demos/demo-9/products/product-1-2.jpg" alt="Product image" class="product-image-hover">
                                    </a> -->

                                    <!-- <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    </div> -->
                                    <!-- End .product-action-vertical -->

                                    <!-- <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div> -->
                                    <!-- End .product-action -->
                                    <!-- </figure> -->
                                    <!-- End .product-media -->

                                    <!-- <div class="product-body"> -->
                                    <!-- <h3 class="product-title"><a href="product.html">Denim jacket</a></h3> -->
                                    <!-- End .product-title -->
                                    <!-- <div class="product-price"> -->
                                    <!-- $19.99 -->
                                    <!-- </div> -->
                                    <!-- End .product-price -->

                                    <!-- <div class="ratings-container"> -->
                                    <!-- <div class="ratings"> -->
                                    <!-- <div class="ratings-val" style="width: 100%;"></div> -->
                                    <!-- End .ratings-val -->
                                    <!-- </div> -->
                                    <!-- End .ratings -->
                                    <!-- <span class="ratings-text">( 6 Reviews )</span> -->
                                    <!-- </div> -->
                                    <!-- End .rating-container -->
                                    <!-- <div class="product-nav product-nav-thumbs"> -->
                                    <!-- <a href="#" class="active">
                                        <img src="assets/images/demos/demo-9/products/product-1-thumb.jpg" alt="product desc">
                                    </a>
                                    <a href="#">
                                        <img src="assets/images/demos/demo-9/products/product-1-2-thumb.jpg" alt="product desc">
                                    </a>
                                    <a href="#">
                                        <img src="assets/images/demos/demo-9/products/product-1-3-thumb.jpg" alt="product desc">
                                    </a> -->
                                    <!-- </div> -->
                                    <!-- End .product-nav -->
                                    <!-- </div> -->
                                    <!-- End .product-body -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="icon-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="icon-angle-right"></i></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div> -->
                    <!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane p-0 fade" id="trending-men-tab" role="tabpanel"
                     aria-labelledby="trending-men-link">
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

                        <div class="owl-stage-outer">
                            <div class="owl-stage"></div>
                        </div>
                        <div class="owl-nav disabled">
                            <button type="button" role="presentation" class="owl-prev"><i class="icon-angle-left"></i>
                            </button>
                            <button type="button" role="presentation" class="owl-next"><i class="icon-angle-right"></i>
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
    @elseif(session('user_id') && $res['user_roles'] === 'vendor')
        <div class="container">
            <div class="heading heading-flex mb-3">

                <div class="heading-right">
                    <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link active" id="trending-women-link" data-toggle="tab" href="#trending-women-tab"
                               role="tab" aria-controls="trending-women-tab" aria-selected="true">My products</a>
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

                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                 style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1338px;">
                                @foreach($products as $product)
                                    <div class="owl-item active" style="width: 247.6px; margin-right: 20px;">
                                        <div class="product product-7 text-center">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="{{$product['product_image']}}"
                                                         alt="Product image" class="product-image">
                                                    <!-- <img src="assets/images/demos/demo-9/products/product-1-2.jpg" alt="Product image" class="product-image-hover"> -->
                                                </a>

                                                <div class="product-action-vertical">
                                                    <!-- <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a> -->
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                       title="Quick view"><span>Quick view</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <h3 class="product-title"><a href="product.html">{{$product['product_name']}}</a></h3>
                                                <!-- End .product-title -->
                                                <div class="product-price">
                                                    ${{number_format((float)$product['price'], 2, '.', '')}}
                                                </div><!-- End .product-price -->

                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div>
                                                        <!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 6 Reviews )</span>
                                                </div><!-- End .rating-container -->

                                                <!-- <div class="product-nav product-nav-thumbs">
                                                    <a href="#" class="active">
                                                        <img src="assets/images/demos/demo-9/products/product-1-thumb.jpg" alt="product desc">
                                                    </a>
                                                    <a href="#">
                                                        <img src="assets/images/demos/demo-9/products/product-1-2-thumb.jpg" alt="product desc">
                                                    </a>
                                                    <a href="#">
                                                        <img src="assets/images/demos/demo-9/products/product-1-3-thumb.jpg" alt="product desc">
                                                    </a> -->
                                                <!-- </div>  -->
                                                <!-- End .product-nav -->
                                            </div><!-- End .product-body -->
                                        </div>
                                    </div>
                                @endforeach
                                {{--<div class="owl-item active" style="width: 247.6px; margin-right: 20px;">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="assets/images/demos/demo-9/products/product-2-1.jpg"
                                                     alt="Product image" class="product-image">
                                                <!-- <img src="assets/images/demos/demo-9/products/product-2-2.jpg" alt="Product image" class="product-image-hover"> -->
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                   title="Quick view"><span>Quick view</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <h3 class="product-title"><a href="product.html">Sandals</a></h3>
                                            <!-- End .product-title -->
                                            <div class="product-price">
                                                $24.99
                                            </div><!-- End .product-price -->

                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 60%;"></div>
                                                    <!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 2 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 247.6px; margin-right: 20px;">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <!-- <span class="product-label label-sale">sale</span> -->
                                            <a href="product.html">
                                                <img src="assets/images/demos/demo-9/products/product-3-1.jpg"
                                                     alt="Product image" class="product-image">
                                                <!-- <img src="assets/images/demos/demo-9/products/product-3-2.jpg" alt="Product image" class="product-image-hover"> -->
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                   title="Quick view"><span>Quick view</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <h3 class="product-title"><a href="product.html">Printed sweatshirt</a></h3>
                                            <!-- End .product-title -->
                                            <div class="product-price">
                                                $12.99
                                                <!-- <span class="new-price">Now $7.99</span> -->
                                                <!-- <span class="old-price">Was $12.99</span> -->
                                            </div><!-- End .product-price -->

                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 60%;"></div>
                                                    <!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 3 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 247.6px; margin-right: 20px;">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="assets/images/demos/demo-9/products/product-4-1.jpg"
                                                     alt="Product image" class="product-image">
                                                <!-- <img src="assets/images/demos/demo-9/products/product-4-2.jpg" alt="Product image" class="product-image-hover"> -->
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                   title="Quick view"><span>Quick view</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <h3 class="product-title"><a href="product.html">Linen-blend paper bag
                                                    trousers</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $17.99
                                            </div><!-- End .product-price -->

                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 80%;"></div>
                                                    <!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 2 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <!-- <div class="product-nav product-nav-thumbs">
                                                <a href="#" class="active">
                                                    <img src="assets/images/demos/demo-9/products/product-4-thumb.jpg" alt="product desc">
                                                </a>
                                                <a href="#">
                                                    <img src="assets/images/demos/demo-9/products/product-4-2-thumb.jpg" alt="product desc">
                                                </a>
                                            </div> -->
                                            <!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div>
                                </div>--}}
                                <div class="owl-item" style="width: 247.6px; margin-right: 20px;">
                                    <div class="product product-7 text-center">
                                        <!-- <figure class="product-media"> -->
                                        <!-- <a href="product.html">
                                            <img src="assets/images/demos/demo-9/products/product-1-1.jpg" alt="Product image" class="product-image">
                                            <img src="assets/images/demos/demo-9/products/product-1-2.jpg" alt="Product image" class="product-image-hover">
                                        </a> -->

                                        <!-- <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        </div> -->
                                        <!-- End .product-action-vertical -->

                                        <!-- <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div> -->
                                        <!-- End .product-action -->
                                        <!-- </figure> -->
                                        <!-- End .product-media -->

                                        <!-- <div class="product-body"> -->
                                        <!-- <h3 class="product-title"><a href="product.html">Denim jacket</a></h3> -->
                                        <!-- End .product-title -->
                                        <!-- <div class="product-price"> -->
                                        <!-- $19.99 -->
                                        <!-- </div> -->
                                        <!-- End .product-price -->

                                        <!-- <div class="ratings-container"> -->
                                        <!-- <div class="ratings"> -->
                                        <!-- <div class="ratings-val" style="width: 100%;"></div> -->
                                        <!-- End .ratings-val -->
                                        <!-- </div> -->
                                        <!-- End .ratings -->
                                        <!-- <span class="ratings-text">( 6 Reviews )</span> -->
                                        <!-- </div> -->
                                        <!-- End .rating-container -->
                                        <!-- <div class="product-nav product-nav-thumbs"> -->
                                        <!-- <a href="#" class="active">
                                            <img src="assets/images/demos/demo-9/products/product-1-thumb.jpg" alt="product desc">
                                        </a>
                                        <a href="#">
                                            <img src="assets/images/demos/demo-9/products/product-1-2-thumb.jpg" alt="product desc">
                                        </a>
                                        <a href="#">
                                            <img src="assets/images/demos/demo-9/products/product-1-3-thumb.jpg" alt="product desc">
                                        </a> -->
                                        <!-- </div> -->
                                        <!-- End .product-nav -->
                                        <!-- </div> -->
                                        <!-- End .product-body -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="icon-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="icon-angle-right"></i></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div> -->
                        <!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="trending-men-tab" role="tabpanel"
                         aria-labelledby="trending-men-link">
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

                            <div class="owl-stage-outer">
                                <div class="owl-stage"></div>
                            </div>
                            <div class="owl-nav disabled">
                                <button type="button" role="presentation" class="owl-prev"><i class="icon-angle-left"></i>
                                </button>
                                <button type="button" role="presentation" class="owl-next"><i class="icon-angle-right"></i>
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

    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up">Back to Top</i></button>

    <!-- End .main -->

    <!-- End .footer -->
</div><!-- End .page-wrapper -->
<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>
@endsection





<!-- molla/index-9.html  22 Nov 2019 09:58:03 GMT -->


