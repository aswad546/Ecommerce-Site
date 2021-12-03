<!doctype html>
<!--
* Bootstrap Simple Admin Template
* Version: 2.1
* Author: Alexis Luna
* Website: https://github.com/alexis-luna/bootstrap-simple-admin-template
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Product</title>
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
    <style>
        body {
            background-color: white;
        }
    </style>
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="theme-color" content="#ffffff">
    <link rel="mask-icon" href="{{asset('assets/images/icons/safari-pinned-tab.svg')}}" color="#666666">

</head>

<body>
<div class="wrapper">
    <!-- sidebar navigation component -->
    <!-- <nav id="sidebar" class="active">
        <div class="sidebar-header">
            <img src="assets-1/img/bootstraper-logo.png" alt="bootraper logo" class="app-logo">
        </div>
        <ul class="list-unstyled components text-secondary">
            <li>
                <a href="dashboard.html"><i class="fas fa-home"></i>Dashboard</a>
            </li>
            <li>
                <a href="forms.html"><i class="fas fa-file-alt"></i>Forms</a>
            </li>
            <li>
                <a href="tables.html"><i class="fas fa-table"></i>Tables</a>
            </li>
            <li>
                <a href="charts.html"><i class="fas fa-chart-bar"></i>Charts</a>
            </li>
            <li>
                <a href="icons.html"><i class="fas fa-icons"></i>Icons</a>
            </li>
            <li>
                <a href="#uielementsmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-layer-group"></i>UI Elements</a>
                <ul class="collapse list-unstyled" id="uielementsmenu">
                    <li>
                        <a href="ui-buttons.html"><i class="fas fa-angle-right"></i>Buttons</a>
                    </li>
                    <li>
                        <a href="ui-badges.html"><i class="fas fa-angle-right"></i>Badges</a>
                    </li>
                    <li>
                        <a href="ui-cards.html"><i class="fas fa-angle-right"></i>Cards</a>
                    </li>
                    <li>
                        <a href="ui-alerts.html"><i class="fas fa-angle-right"></i>Alerts</a>
                    </li>
                    <li>
                        <a href="ui-tabs.html"><i class="fas fa-angle-right"></i>Tabs</a>
                    </li>
                    <li>
                        <a href="ui-date-time-picker.html"><i class="fas fa-angle-right"></i>Date & Time Picker</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#authmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-user-shield"></i>Authentication</a>
                <ul class="collapse list-unstyled" id="authmenu">
                    <li>
                        <a href="login.html"><i class="fas fa-lock"></i>Login</a>
                    </li>
                    <li>
                        <a href="signup.html"><i class="fas fa-user-plus"></i>Signup</a>
                    </li>
                    <li>
                        <a href="forgot-password.html"><i class="fas fa-user-lock"></i>Forgot password</a>
                    </li>
                </ul>
            </li>
            <li> -->
    <!-- <a href="#pagesmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-copy"></i>Pages</a>
    <ul class="collapse list-unstyled" id="pagesmenu">
        <li>
            <a href="blank.html"><i class="fas fa-file"></i>Blank page</a>
        </li>
        <li>
            <a href="404.html"><i class="fas fa-info-circle"></i>404 Error page</a>
        </li>
        <li>
            <a href="500.html"><i class="fas fa-info-circle"></i>500 Error page</a>
        </li>
    </ul>
</li>
<li>
    <a href="users.html"><i class="fas fa-user-friends"></i>Users</a>
</li>
<li>
    <a href="settings.html"><i class="fas fa-cog"></i>Settings</a>
</li>
</ul>
</nav> -->
    <!-- end of sidebar component -->
    <div id="body" class="active">
        <!-- navbar navigation component -->
        <!-- <nav class="navbar navbar-expand-lg navbar-white bg-white">
            <button type="button" id="sidebarCollapse" class="btn btn-light">
                <i class="fas fa-bars"></i><span></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <div class="nav-dropdown">
                            <a href="#" id="nav1" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-link"></i> <span>Quick Links</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end nav-link-menu" aria-labelledby="nav1">
                                <ul class="nav-list">
                                    <li><a href="" class="dropdown-item"><i class="fas fa-list"></i> Access Logs</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-database"></i> Back ups</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-cloud-download-alt"></i> Updates</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-user-shield"></i> Roles</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <div class="nav-dropdown">
                            <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user"></i> <span>John Doe</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                <ul class="nav-list">
                                    <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav> -->
        <!-- end of navbar navigation -->
        <div class="content">
            <div class="container">
                <div class="page-title">
                    <h4>Add Vendor</h4>
                </div>

                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                                <div class="container">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                                        <li class="breadcrumb-item active" aria-current="page">Add a vendor</li>
                                    </ol>
                                </div><!-- End .container -->
                            </nav>
                            <div class="card-body">
                                <h6 class="card-title">Enter vendor details.</h6>
                                <form accept-charset="utf-8" method="post" action="{{route('add.vendor.save')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Vendor Email</label>
                                        <input type="text" name="email" placeholder="Vendor Email" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Vendor Name</label>
                                        <input type="text" name="name" placeholder="Vendor Name" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Vendor Address</label>
                                        <input type="text" name="address" placeholder="Vendor Address" class="form-control" required>
                                    </div>
                                    {{--<div class="form-group">
                                        <label for="register-password">Vendor Password</label>
                                        <input type="password" class="password" id="register-password" name="password" required="">
                                    </div>--}}
                                    <div class="mb-3">
                                        <button class="btn btn-primary" type="submit">
                                            Add Vendor
                                        </button>

                                        <!-- <input type="submit" class="btn btn-primary"> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('assets-1/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets-1/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets-1/js/form-validator.js')}}"></script>
<script src="{{asset('assets-1/js/script.js')}}"></script>
</body>

</html>
