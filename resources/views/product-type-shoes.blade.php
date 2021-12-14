@extends('layouts.product-master')
@section('content')
                                @foreach($products as $product)
                                    <div class="owl-item active" style="width: 247.6px; margin-right: 20px;">
                                        <div class="product product-7 text-center">
                                            <figure class="product-media">
                                                <a href="/product-detail">
                                                    <img src="{{Storage::disk('s3')->url('images/'.$product['product_image'])}}"
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
@endsection
