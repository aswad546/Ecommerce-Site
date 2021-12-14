<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ecommerce</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Ecommerce">
    <meta name="author" content="p-themes">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/jquery.countdown.css')}}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/skins/skin-demo-9.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/demos/demo-9.css')}}">
</head>

<body class="" style="">
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
                            <span class="cart-txt"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-cart-products">
                                <div class="product">
                                    <a href="http://127.0.0.1:8000/edit-profile"><span
                                            class="cart-txt">Edit Profile</span></a>
                                </div><!-- End .product -->
                                <div class="product">
                                    <a href="http://127.0.0.1:8000/vendor-products"><span
                                            class="cart-txt">My Products</span></a>
                                </div><!-- End .product -->
                                <div class="product">
                                    <a href="#"><span class="cart-txt">Settings</span></a>
                                </div><!-- End .product -->
                                <div class="product">
                                    <a href="http://127.0.0.1:8000/logout"><span class="cart-txt">Logout</span></a>
                                </div><!-- End .product -->
                            </div><!-- End .cart-product -->

                        </div><!-- End .dropdown-menu -->

                    </div><!-- End .cart-dropdown -->
                </div>
            </div><!-- End .container -->
        </div><!-- End .header-middle -->

        <!-- End .header-bottom -->
    </header><!-- End .header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                <li class="breadcrumb-item active" aria-current="page">Product</li>
            </ol>
        </div><!-- End .container -->
    </nav>

    <div class="content">
        <div class="container">
            <div class="page-title">
                <h3>Product
                    <!-- <a href="roles.html" class="btn btn-sm btn-outline-primary float-end"><i class="fas fa-user-shield"></i> Roles</a> -->
                </h3>
            </div>
            <div class="box box-primary">
                <div class="box-body">
                    <table width="100%" class="table table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Product Amount</th>
                            <!-- <th>Status</th> -->
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product['product_id']}}</td>
                                <td>{{$product['product_name']}}</td>
                                <td><img style="width: 100px" src="{{asset('assets/images/'.$product['product_image'])}}"></td>
                                <td>${{number_format((float)$product['price'], 2, '.', '')}}</td>
                            </tr>
                        @endforeach
                        <!-- <tr>
    <td>Doris Greene</td>
    <td>ms.greene@outlook.com</td>
    <td>Writer</td>
    <td>Staff</td>
    <td>Active</td>
    <td class="text-end">
        <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
        <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
    </td>
</tr>
<tr>
    <td>Mason Porter</td>
    <td>mason_porter@gmail.com</td>
    <td>Contributor</td>
    <td>Staff</td>
    <td>Active</td>
    <td class="text-end">
        <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
        <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
    </td>
</tr>
<tr>
    <td>Minerva Hooper</td>
    <td>minerva.hooper@gmail.com</td>
    <td>Administrator</td>
    <td>Admin</td>
    <td>Disabled</td>
    <td class="text-end">
        <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
        <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
    </td>
</tr>
<tr>
    <td>Jessie Williams</td>
    <td>jessie@gmail.com</td>
    <td>Administrator</td>
    <td>Admin</td>
    <td>Active</td>
    <td class="text-end">
        <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
        <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
    </td>
</tr>
<tr>
    <td>Peter Benhams</td>
    <td>pette@gmail.com</td>
    <td>Editor</td>
    <td>Staff</td>
    <td>Active</td>
    <td class="text-end">
        <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
        <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
    </td>
</tr>
<tr>
    <td>Jose Rodriguez</td>
    <td>jose.rodz@gmail.com</td>
    <td>Author</td>
    <td>Staff</td>
    <td>Active</td>
    <td class="text-end">
        <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
        <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
    </td>
</tr> -->
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up">Back to Top</i></button>

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
            <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..."
                   required="">
            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
        </form>

        <div class="social-icons">
            <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->

<!-- Sign in / Register Modal -->
<div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="icon-close"></i></span>
                </button>

                <div class="form-box">
                    <div class="form-tab">
                        <ul class="nav nav-pills nav-fill nav-border-anim" role="tablist">
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
                                <form method="post" enctype="multipart/form-data" action="/login">
                                    <input type="hidden" name="_token" value="trFWw64w5whtE4WBn6Zo1yWC8t3RGGxgRUwVHncq">
                                    <div class="form-group">
                                        <label for="singin-email">Username or email address *</label>
                                        <input type="text" class="form-control" id="singin-email" name="email"
                                               required="">
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="singin-password">Password *</label>
                                        <input type="password" class="form-control" id="singin-password" name="password"
                                               required="">
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
                                <!-- End .form-choice -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                <form method="post" enctype="multipart/form-data" action="/register">
                                    <input type="hidden" name="_token" value="trFWw64w5whtE4WBn6Zo1yWC8t3RGGxgRUwVHncq">
                                    <div class="form-group">
                                        <label for="register-name">Your name *</label>
                                        <input type="text" class="form-control" id="register-name" name="name"
                                               required="">
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="register-email">Your email address *</label>
                                        <input type="email" class="form-control" id="register-email" name="email"
                                               required="">
                                    </div><!-- End .form-group -->
                                    <div class="form-group">
                                        <label for="register-user-type">User Type *</label>
                                        <select class="form-control" id="register-user-type" name="user_type"
                                                required="">
                                            <option value="" selected="">Select an option</option>
                                            <option value="vendor">Transaction-history</option>
                                            <option value="user">User</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="register-address">Address *</label>
                                        <input type="text" class="form-control" id="register-address" name="address"
                                               required="">
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="register-password">Password *</label>
                                        <input type="password" class="form-control" id="register-password"
                                               name="password" required="">
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
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .form-tab -->
                </div><!-- End .form-box -->
            </div><!-- End .modal-body -->
        </div><!-- End .modal-content -->
    </div><!-- End .modal-dialog -->
</div><!-- End .modal -->

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
