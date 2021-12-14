<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Molla - Bootstrap eCommerce Template</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    {{--    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">--}}
    {{--    <link rel="mask-icon" href="{{asset('assets/images/icons/safari-pinned-tab.svg')}}" color="#666666">--}}

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/icons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/icons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/icons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/images/icons/site.html')}}">
    <link rel="mask-icon" href="{{asset('assets/images/icons/safari-pinned-tab.svg')}}" color="#666666">
    <link rel="shortcut icon" href="{{asset('assets/images/icons/favicon.ico')}}">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="{{asset('assets/images/icons/browserconfig.xml')}}">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/jquery.countdown.css')}}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/skins/skin-demo-9.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/demos/demo-9.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/magnific-popup/magnific-popup.css')}}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/nouislider/nouislider.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/success-modal.css')}}">
</head>

<body>
<div class="page-wrapper">
    <header class="header header-6">

        <div class="header-middle">
            <div class="container">
                <div class="header-left">
                    <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                        <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                        <form action="#" method="get">
                            <div class="header-search-wrapper search-wrapper-wide">
                                <label for="q" class="sr-only">Search</label>
                                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                <input type="search" class="form-control" name="q" id="q"
                                       placeholder="Search product ..." required="">
                            </div><!-- End .header-search-wrapper -->
                        </form>
                    </div><!-- End .header-search -->
                </div>
                <div class="header-center">

                </div><!-- End .header-left -->
                <div class="header-right">

                    <!-- End .cart-dropdown -->
                    <div class="dropdown cart-dropdown">
                        <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false" data-display="static">
                            <i class="icon-user"></i>
                            <span class="cart-txt">Ibrahim</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-cart-products">
                                <div class="product">
                                    <a href="{{route('edit.profile')}}"><span
                                            class="cart-txt">Edit Profile</span></a>
                                </div><!-- End .product -->
                                <div class="product">
                                    <a href="{{route('show.products')}}"><span
                                            class="cart-txt">My Products</span></a>
                                </div><!-- End .product -->
                                <div class="product">
                                    <a href="{{route('logout')}}"><span class="cart-txt">Logout</span></a>
                                </div><!-- End .product -->
                            </div><!-- End .cart-product -->

                        </div><!-- End .dropdown-menu -->

                    </div><!-- End .cart-dropdown -->
                </div>
            </div><!-- End .container -->
        </div><!-- End .header-middle -->

        <!-- End .header-bottom -->
    </header>

    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container d-flex align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>

                {{--                <nav class="product-pager ml-auto" aria-label="Product">--}}
                {{--                    <a class="product-pager-link product-pager-prev" href="#" aria-label="Previous" tabindex="-1">--}}
                {{--                        <i class="icon-angle-left"></i>--}}
                {{--                        <span>Prev</span>--}}
                {{--                    </a>--}}

                {{--                    <a class="product-pager-link product-pager-next" href="#" aria-label="Next" tabindex="-1">--}}
                {{--                        <span>Next</span>--}}
                {{--                        <i class="icon-angle-right"></i>--}}
                {{--                    </a>--}}
                {{--                </nav><!-- End .pager-nav -->--}}
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="container">
                <div class="product-details-top">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery product-gallery-vertical">
                                <div class="row">
                                    <figure class="product-main-image">
                                        {{--                                        <img id="product-zoom" src="assets/images/products/single/1.jpg"--}}
                                        <img id="product-zoom"
                                             src="{{$product['product_image']}}"

                                             data-zoom-image="assets/images/products/single/1-big.jpg"

                                             alt="product image">

                                        <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                            <i class="icon-arrows"></i>
                                        </a>
                                    </figure><!-- End .product-main-image -->

                                {{--                                    <div id="product-zoom-gallery" class="product-image-gallery">--}}
                                {{--                                        <a class="product-gallery-item active" href="#"--}}
                                {{--                                           data-image="assets/images/products/single/1.jpg"--}}
                                {{--                                           data-zoom-image="assets/images/products/single/1-big.jpg">--}}
                                {{--                                            <img src="assets/images/products/single/1-small.jpg" alt="product side">--}}
                                {{--                                        </a>--}}

                                {{--                                        <a class="product-gallery-item" href="#"--}}
                                {{--                                           data-image="assets/images/products/single/2.jpg"--}}
                                {{--                                           data-zoom-image="assets/images/products/single/2-big.jpg">--}}
                                {{--                                            <img src="assets/images/products/single/2-small.jpg" alt="product cross">--}}
                                {{--                                        </a>--}}

                                {{--                                        <a class="product-gallery-item" href="#"--}}
                                {{--                                           data-image="assets/images/products/single/3.jpg"--}}
                                {{--                                           data-zoom-image="assets/images/products/single/3-big.jpg">--}}
                                {{--                                            <img src="assets/images/products/single/3-small.jpg"--}}
                                {{--                                                 alt="product with model">--}}
                                {{--                                        </a>--}}

                                {{--                                        <a class="product-gallery-item" href="#"--}}
                                {{--                                           data-image="assets/images/products/single/4.jpg"--}}
                                {{--                                           data-zoom-image="assets/images/products/single/4-big.jpg">--}}
                                {{--                                            <img src="assets/images/products/single/4-small.jpg" alt="product back">--}}
                                {{--                                        </a>--}}
                                {{--                                    </div>--}}
                                <!-- End .product-image-gallery -->
                                </div><!-- End .row -->
                            </div><!-- End .product-gallery -->
                        </div><!-- End .col-md-6 -->

                        <div class="col-md-6">

                            <div class="product-details">

                                <h1 class="product-title">{{$product['product_name']}}</h1>
                                @if($product['featured'] == 'featured')
                                    <p>Featured product</p>
                                @endif
                            <!-- End .product-title -->

                                {{--                                <div class="ratings-container">--}}
                                {{--                                    <div class="ratings">--}}
                                {{--                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->--}}
                                {{--                                    </div><!-- End .ratings -->--}}
                                {{--                                    <a class="ratings-text" href="#product-review-link" id="review-link">( 2 Reviews--}}
                                {{--                                        )</a>--}}
                                {{--                                </div><!-- End .rating-container -->--}}

                                <div class="product-price">
                                    ${{number_format((float)$product['price'], 2, '.', '')}}
                                </div><!-- End .product-price -->

                                <div class="product-content">
                                    <p>{{$product['product_description']}} </p>
                                </div><!-- End .product-content -->

                                {{--                                <div class="details-filter-row details-row-size">--}}
                                {{--                                    <label>Color:</label>--}}

                                {{--                                    <div class="product-nav product-nav-thumbs">--}}
                                {{--                                        <a href="#" class="active">--}}
                                {{--                                            <img src="assets/images/products/single/1-thumb.jpg" alt="product desc">--}}
                                {{--                                        </a>--}}
                                {{--                                        <a href="#">--}}
                                {{--                                            <img src="assets/images/products/single/2-thumb.jpg" alt="product desc">--}}
                                {{--                                        </a>--}}
                                {{--                                    </div>--}}
                                {{--                                    <!-- End .product-nav -->--}}
                                {{--                                </div><!-- End .details-filter-row -->--}}

                                {{--<div class="details-filter-row details-row-size">
                                    <label for="size">Size:</label>
                                    <div class="select-custom">
                                        <select name="size" id="size" class="form-control">
                                            <option value="#" selected="selected">Select a size</option>
                                            <option value="s">Small</option>
                                            <option value="m">Medium</option>
                                            <option value="l">Large</option>
                                            <option value="xl">Extra Large</option>
                                        </select>
                                    </div><!-- End .select-custom -->

                                    <a href="#" class="size-guide"><i class="icon-th-list"></i>size guide</a>
                                </div><!-- End .details-filter-row -->--}}
                                {{--                                @dd($product)--}}
                                <form accept-charset="utf-8" method="post"
                                      action="{{route('add.cart.save', $product['product_id'])}}"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="details-filter-row details-row-size">
                                        <label for="qty">Qty:</label>
                                        <div class="product-details-quantity">
                                            <div class="input-group  input-spinner">
                                                <div class="input-group-prepend">
                                                    <button style="min-width: 26px"
                                                            class="btn btn-decrement btn-spinner" type="button">
                                                        <i class="icon-minus"></i></button>
                                                </div>
                                                <input name="quantity" type="text" style="text-align: center"
                                                       class="form-control " required="" placeholder="" value="1">
                                                <div class="input-group-append">
                                                    <button style="min-width: 26px"
                                                            class="btn btn-increment btn-spinner" type="button">
                                                        <i class="icon-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            {{--                                        <input type="number" id="qty" class="form-control" value="1" min="1" max="10"--}}
                                            {{--                                               step="1" data-decimals="0" required="" style="">--}}
                                            {{--<div class="input-group  input-spinner">
                                                  <div class="input-group-prepend">
                                                      <button style="min-width: 26px" class="btn btn-decrement btn-spinner"
                                                              type="button"><i class="icon-minus"></i></button>
                                                  </div>
                                                  <input type="text" style="text-align: center" class="form-control "
                                                         required= placeholder="" value="1">
                                                  <div class="input-group-append">
                                                      <button style="min-width: 26px" class="btn btn-increment btn-spinner"
                                                              type="button"><i class="icon-plus"></i></button>
                                                  </div>
                                              </div>--}}
                                        </div><!-- End .product-details-quantity -->
                                    </div><!-- End .details-filter-row -->

                                    <div class="product-details-action">
                                        <button class="btn-product btn-cart"><span>add to cart</span></button>

                                        {{--                                    <div class="details-action-wrapper">--}}
                                        {{--                                        <a href="#" class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>--}}
                                        {{--                                        <a href="#" class="btn-product btn-compare"--}}
                                        {{--                                           title="Compare"><span>Add to Compare</span></a>--}}
                                        {{--                                    </div><!-- End .details-action-wrapper -->--}}
                                    </div><!-- End .product-details-action -->
                                </form>

                                {{--                                <div class="product-details-footer">--}}
                                {{--                                    <div class="product-cat">--}}
                                {{--                                        <span>Category:</span>--}}
                                {{--                                        <a href="#">Women</a>,--}}
                                {{--                                        <a href="#">Dresses</a>,--}}
                                {{--                                        <a href="#">Yellow</a>--}}
                                {{--                                    </div><!-- End .product-cat -->--}}

                                {{--                                    <div class="social-icons social-icons-sm">--}}
                                {{--                                        <span class="social-label">Share:</span>--}}
                                {{--                                        <a href="#" class="social-icon" title="Facebook" target="_blank"><i--}}
                                {{--                                                class="icon-facebook-f"></i></a>--}}
                                {{--                                        <a href="#" class="social-icon" title="Twitter" target="_blank"><i--}}
                                {{--                                                class="icon-twitter"></i></a>--}}
                                {{--                                        <a href="#" class="social-icon" title="Instagram" target="_blank"><i--}}
                                {{--                                                class="icon-instagram"></i></a>--}}
                                {{--                                        <a href="#" class="social-icon" title="Pinterest" target="_blank"><i--}}
                                {{--                                                class="icon-pinterest"></i></a>--}}
                                {{--                                    </div>--}}
                                {{--                                </div><!-- End .product-details-footer -->--}}
                            </div><!-- End .product-details -->

                        </div><!-- End .col-md-6 -->
                    </div><!-- End .row -->
                </div><!-- End .product-details-top -->

                <div class="product-details-tab">
                    <ul class="nav nav-pills justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab"
                               role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-shipping-link" data-toggle="tab"
                               href="#product-shipping-tab" role="tab" aria-controls="product-shipping-tab"
                               aria-selected="false">Shipping &amp; Returns</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab"
                               role="tab" aria-controls="product-review-tab" aria-selected="false">Reviews </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel"
                             aria-labelledby="product-desc-link">
                            <div class="product-desc-content">
                                <h3>Product Information</h3>
                                <p>{{$product['product_description']}}</p>
                                {{--                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque--}}
                                {{--                                    volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non,--}}
                                {{--                                    semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.--}}
                                {{--                                    Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.--}}
                                {{--                                    Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula--}}
                                {{--                                    vulputate sem tristique cursus. </p>--}}
                                {{--                                <ul>--}}
                                {{--                                    <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit.</li>--}}
                                {{--                                    <li>Vivamus finibus vel mauris ut vehicula.</li>--}}
                                {{--                                    <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>--}}
                                {{--                                </ul>--}}

                                {{--                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque--}}
                                {{--                                    volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non,--}}
                                {{--                                    semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.--}}
                                {{--                                    Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.--}}
                                {{--                                    Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula--}}
                                {{--                                    vulputate sem tristique cursus. </p>--}}
                            </div><!-- End .product-desc-content -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade" id="product-shipping-tab" role="tabpanel"
                             aria-labelledby="product-shipping-link">
                            <div class="product-desc-content">
                                <h3>Delivery &amp; returns</h3>
                                <p>We deliver to over 100 countries around the world. For full details of the delivery
                                    options we offer, please view our <a href="#">Delivery information</a><br>
                                    We hope you’ll love every purchase, but if you ever need to return an item you can
                                    do so within a month of receipt. For full details of how to make a return, please
                                    view our <a href="#">Returns information</a></p>
                            </div><!-- End .product-desc-content -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade" id="product-review-tab" role="tabpanel"
                             aria-labelledby="product-review-link">
                            <div class="reviews">
                                <h3>Reviews </h3>
                                @if(empty($feedback))
                                    <div class="review">
                                        <div class="row no-gutters">
                                            <div class="col-auto">
                                                <div class="mb-3">
                                                    No reviews
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @foreach($feedback as $f)
                                    <div class="review">
                                        <div class="row no-gutters">
                                            <div class="col-auto">
                                                <h4><a href="#">{{$f['name']}}</a></h4>
                                                <div class="ratings-container">
                                                    @if($f['rating'] == 5)
                                                        <div class="ratings">
                                                            <div class="ratings-val" style="width: 100%;"></div>
                                                        </div>
                                                    @elseif($f['rating'] == 4)
                                                        <div class="ratings">
                                                            <div class="ratings-val" style="width: 80%;"></div>
                                                        </div>
                                                    @elseif($f['rating'] == 3)
                                                        <div class="ratings">
                                                            <div class="ratings-val" style="width: 60%;"></div>
                                                        </div>
                                                    @elseif($f['rating'] == 2)
                                                        <div class="ratings">
                                                            <div class="ratings-val" style="width: 40%;"></div>
                                                        </div>
                                                    @elseif($f['rating'] == 1)
                                                        <div class="ratings">
                                                            <div class="ratings-val" style="width: 20%;"></div>
                                                        </div>
                                                    @endif
                                                    {{--                                                    <div class="ratings">--}}
                                                    {{--                                                        <div class="ratings-val" style="width: 80%;"></div>--}}
                                                    {{--                                                        <!-- End .ratings-val -->--}}
                                                    {{--                                                    </div><!-- End .ratings -->--}}
                                                    {{--                                                }--}}
                                                    {{--                                                @endif--}}
                                                    {{--                                                <div class="ratings">--}}
                                                    {{--                                                    <div class="ratings-val" style="width: 100%;"></div>--}}
                                                    {{--                                                    <!-- End .ratings-val -->--}}
                                                    {{--                                                </div><!-- End .ratings -->--}}
                                                </div><!-- End .rating-container -->
                                                {{--                                            <span class="review-date">6 days ago</span>--}}
                                            </div><!-- End .col -->
                                            <div class="col">
                                                <h4>Description</h4>

                                                <div class="review-content">
                                                    <p>
                                                        {{$f['feedback_text']}}
                                                    </p>
                                                    {{--                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cum--}}
                                                    {{--                                                    dolores assumenda asperiores facilis porro reprehenderit animi culpa--}}
                                                    {{--                                                    atque blanditiis commodi perspiciatis doloremque, possimus,--}}
                                                    {{--                                                    explicabo, autem fugit beatae quae voluptas!</p>--}}
                                                </div><!-- End .review-content -->

                                                <div class="review-action">
                                                    <a href="#"><i class="icon-thumbs-up"></i>Helpful (2)</a>
                                                    <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                                </div><!-- End .review-action -->

                                            </div><!-- End .col-auto -->
                                        </div><!-- End .row -->
                                    </div><!-- End .review -->
                                @endforeach
                                {{--                                action="{{route('feedback.save'), $product['product_id']}}"--}}
                                <form accept-charset="utf-8" method="post"
                                      action="{{route('feedback.save', $product['product_id'])}}"
                                      enctype="multipart/form-data">
                                    {{--                                   @dd($res)--}}
                                    @csrf
                                    <div class="mb-3">
                                        <label for="text" class="form-label">Add a feedback</label>
                                        <textarea type="text" name="feedback_text" class="form-control" required="">Comment... </textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="m-3 mb-1 p-2">Rating</label>
                                        {{--                                        <span class="form-label mt-2">Rating</span>--}}
                                        <div class="rate">
                                            {{--                                            <label for="password" class="form-label">Rating</label>--}}
                                            {{--                                            <label for="password" class="m-3 mb-1">Rating</label>--}}
                                            <label for="star5" title="text">5 stars</label>
                                            <input type="radio" id="star5" name="rating" value="5"
                                                   class="form-control"/>
                                            <label for="star4" title="text">4 stars</label>
                                            <input type="radio" id="star4" name="rating" value="4"
                                                   class="form-control"/>
                                            <label for="star3" title="text">3 stars</label>
                                            <input type="radio" id="star3" name="rating" value="3"
                                                   class="form-control"/>
                                            <label for="star2" title="text">2 stars</label>
                                            <input type="radio" id="star2" name="rating" value="2"
                                                   class="form-control"/>
                                            <label for="star1" title="text">1 star</label>
                                            <input type="radio" id="star1" name="rating" value="1"
                                                   class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary" type="submit">
                                            Submit
                                        </button>

                                        <!-- <input type="submit" class="btn btn-primary"> -->
                                    </div>
                                </form>

                                {{--                                <div class="review">--}}
                                {{--                                    <div class="row no-gutters">--}}
                                {{--                                        <div class="col-auto">--}}
                                {{--                                            <h4><a href="#">John Doe</a></h4>--}}
                                {{--                                            <div class="ratings-container">--}}
                                {{--                                                <div class="ratings">--}}
                                {{--                                                    <div class="ratings-val" style="width: 100%;"></div>--}}
                                {{--                                                    <!-- End .ratings-val -->--}}
                                {{--                                                </div><!-- End .ratings -->--}}
                                {{--                                            </div><!-- End .rating-container -->--}}
                                {{--                                            <span class="review-date">5 days ago</span>--}}
                                {{--                                        </div><!-- End .col -->--}}
                                {{--                                        <div class="col">--}}
                                {{--                                            <h4>Very good</h4>--}}

                                {{--                                            <div class="review-content">--}}
                                {{--                                                <p>Sed, molestias, tempore? Ex dolor esse iure hic veniam laborum--}}
                                {{--                                                    blanditiis laudantium iste amet. Cum non voluptate eos enim, ab--}}
                                {{--                                                    cumque nam, modi, quas iure illum repellendus, blanditiis--}}
                                {{--                                                    perspiciatis beatae!</p>--}}
                                {{--                                            </div><!-- End .review-content -->--}}

                                {{--                                            <div class="review-action">--}}
                                {{--                                                <a href="#"><i class="icon-thumbs-up"></i>Helpful (0)</a>--}}
                                {{--                                                <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>--}}
                                {{--                                            </div><!-- End .review-action -->--}}
                                {{--                                        </div><!-- End .col-auto -->--}}
                                {{--                                    </div><!-- End .row -->--}}
                                {{--                                </div><!-- End .review -->--}}
                            </div><!-- End .reviews -->
                        </div><!-- .End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .product-details-tab -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->

    <!-- End .footer -->
</div><!-- End .page-wrapper -->
<button id="scroll-top" title="Back to Top" class=""><i class="icon-arrow-up"></i></button>

<!-- Sticky Bar -->
<div class="sticky-bar">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <figure class="product-media">
                    <a href="product.html">
                        <img src="{{$product['product_image']}}" alt="Product image">
                    </a>
                </figure><!-- End .product-media -->
                <h4 class="product-title"><a href="product.html">{{$product['product_name']}}</a></h4>
                <!-- End .product-title -->
            </div><!-- End .col-6 -->

            <div class="col-6 justify-content-end">
                <div class="product-price">
                    ${{number_format((float)$product['price'], 2, '.', '')}}
                </div><!-- End .product-price -->
                <div class="product-details-quantity">
                    <input type="number" id="sticky-cart-qty" class="form-control" value="1" min="1" max="10" step="1"
                           data-decimals="0" required="" style="display: none;">
                    <div class="input-group  input-spinner">
                        <div class="input-group-prepend">
                            <button style="min-width: 26px" class="btn btn-decrement btn-spinner" type="button"><i
                                    class="icon-minus"></i></button>
                        </div>
                        <input type="text" style="text-align: center" class="form-control " required="" placeholder=""
                               value="1">
                        <div class="input-group-append">
                            <button style="min-width: 26px" class="btn btn-increment btn-spinner" type="button"><i
                                    class="icon-plus"></i></button>
                        </div>
                    </div>
                </div><!-- End .product-details-quantity -->

                <div class="product-details-action">
                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                    {{--                    <a href="#" class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>--}}
                </div><!-- End .product-details-action -->
            </div><!-- End .col-6 -->
        </div><!-- End .row -->
    </div><!-- End .container -->
</div><!-- End .sticky-bar -->
@include('layouts.partials.success-modal')
<!-- Mobile Menu -->
<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-close"></i></span>

        <form action="#" method="get" class="mobile-search">
            <label for="mobile-search" class="sr-only">Search</label>
            <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..."
                   required="">
            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
        </form>

        <nav class="mobile-nav">
            <ul class="mobile-menu">
                <li class="active">
                    <a href="index.html">Home<span class="mmenu-btn"></span></a>

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
                    <a href="category.html">Shop<span class="mmenu-btn"></span></a>
                    <ul>
                        <li><a href="category-list.html">Shop List</a></li>
                        <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                        <li><a href="category.html">Shop Grid 3 Columns</a></li>
                        <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                        <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span
                                        class="tip tip-hot">Hot</span></span></a></li>
                        <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                        <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                        <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span
                                        class="tip tip-new">New</span></span></a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>
                        <li><a href="#">Lookbook</a></li>
                    </ul>
                </li>
                <li>
                    <a href="product.html" class="sf-with-ul">Product<span class="mmenu-btn"></span></a>
                    <ul>
                        <li><a href="product.html">Default</a></li>
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
                    <a href="#">Pages<span class="mmenu-btn"></span></a>
                    <ul>
                        <li>
                            <a href="about.html">About<span class="mmenu-btn"></span></a>

                            <ul>
                                <li><a href="about.html">About 01</a></li>
                                <li><a href="about-2.html">About 02</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">Contact<span class="mmenu-btn"></span></a>

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
                    <a href="blog.html">Blog<span class="mmenu-btn"></span></a>

                    <ul>
                        <li><a href="blog.html">Classic</a></li>
                        <li><a href="blog-listing.html">Listing</a></li>
                        <li>
                            <a href="#">Grid<span class="mmenu-btn"></span></a>
                            <ul>
                                <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Masonry<span class="mmenu-btn"></span></a>
                            <ul>
                                <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Mask<span class="mmenu-btn"></span></a>
                            <ul>
                                <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Single Post<span class="mmenu-btn"></span></a>
                            <ul>
                                <li><a href="single.html">Default with sidebar</a></li>
                                <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="elements-list.html">Elements<span class="mmenu-btn"></span></a>
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
            <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->

<!-- Sign in / Register Modal -->
<div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="icon-close"></i></span>
                </button>

                <div class="form-box">
                    <div class="form-tab">
                        <ul class="nav nav-pills nav-fill" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab"
                                   aria-controls="signin" aria-selected="true">Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab"
                                   aria-controls="register" aria-selected="false">Register</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="tab-content-5">
                            <div class="tab-pane fade show active" id="signin" role="tabpanel"
                                 aria-labelledby="signin-tab">
                                <form action="#">
                                    <div class="form-group">
                                        <label for="singin-email">Username or email address *</label>
                                        <input type="text" class="form-control" id="singin-email" name="singin-email"
                                               required="">
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="singin-password">Password *</label>
                                        <input type="password" class="form-control" id="singin-password"
                                               name="singin-password" required="">
                                    </div><!-- End .form-group -->

                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>LOG IN</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="signin-remember">
                                            <label class="custom-control-label" for="signin-remember">Remember
                                                Me</label>
                                        </div><!-- End .custom-checkbox -->

                                        <a href="#" class="forgot-link">Forgot Your Password?</a>
                                    </div><!-- End .form-footer -->
                                </form>
                                <div class="form-choice">
                                    <p class="text-center">or sign in with</p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login btn-g">
                                                <i class="icon-google"></i>
                                                Login With Google
                                            </a>
                                        </div><!-- End .col-6 -->
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login btn-f">
                                                <i class="icon-facebook-f"></i>
                                                Login With Facebook
                                            </a>
                                        </div><!-- End .col-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .form-choice -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                <form action="#">
                                    <div class="form-group">
                                        <label for="register-email">Your email address *</label>
                                        <input type="email" class="form-control" id="register-email"
                                               name="register-email" required="">
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="register-password">Password *</label>
                                        <input type="password" class="form-control" id="register-password"
                                               name="register-password" required="">
                                    </div><!-- End .form-group -->

                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>SIGN UP</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="register-policy"
                                                   required="">
                                            <label class="custom-control-label" for="register-policy">I agree to the <a
                                                    href="#">privacy policy</a> *</label>
                                        </div><!-- End .custom-checkbox -->
                                    </div><!-- End .form-footer -->
                                </form>
                                <div class="form-choice">
                                    <p class="text-center">or sign in with</p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login btn-g">
                                                <i class="icon-google"></i>
                                                Login With Google
                                            </a>
                                        </div><!-- End .col-6 -->
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login  btn-f">
                                                <i class="icon-facebook-f"></i>
                                                Login With Facebook
                                            </a>
                                        </div><!-- End .col-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .form-choice -->
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .form-tab -->
                </div><!-- End .form-box -->
            </div><!-- End .modal-body -->
        </div><!-- End .modal-content -->
    </div><!-- End .modal-dialog -->
</div><!-- End .modal -->

<!-- Plugins JS File -->
{{--<script src="{{asset('assets/js/jquery.min.js')}}"></script>--}}


<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.hoverIntent.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/superfish.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-input-spinner.js')}}"></script>
<script src="{{asset('assets/js/jquery.elevateZoom.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-input-spinner.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Main JS File -->
<script src="{{asset('assets/js/main.js')}}}"></script>


<!-- molla/product.html  22 Nov 2019 09:55:05 GMT -->
<div class="zoomContainer"
     style="-webkit-transform: translateZ(0);position:absolute;left:115.05000305175781px;top:134px;height:410.15px;width:410.15px;">
    <div class="zoomWindowContainer" style="width: 400px;">
        <div
            style="z-index: 999; overflow: hidden; margin-left: 0px; margin-top: 0px; background-position: -789.85px -429.815px; width: 410.15px; height: 410.15px; float: left; cursor: crosshair; background-repeat: no-repeat; position: absolute; background-image: url(&quot;assets/images/products/single/1-big.jpg&quot;); top: 0px; left: 0px; display: none;"
            class="zoomWindow">&nbsp;
        </div>
    </div>
</div>
</body>
</html>
