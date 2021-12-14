<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
<body>
<li class="breadcrumb-item"><a href="/">Home</a></li>
<div id="snippetContent">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script defer type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script defer src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <div class="container bootstrap snippets bootdey"><h1 class="text-primary">Forgot Password</h1>
        <div class="col-md-9 personal-info"><h3>Enter Email?</h3>
            <form method="post" enctype="multipart/form-data"
                  action="{{route('forgot.password.security.question.show')}}">
                @csrf
                <div class="form-group">

                    <div class="col-lg-8"><input class="form-control" name="email" type="text" placeholder="Enter Email"
                                                 required></div>
                    <button type="submit" class="btn btn-outline-primary-2">
                        <span> Submit</span>
                    </button>
                </div>
            </form>
        </div>


        <script type="text/javascript"></script>
    </div>
</div>

</body>
</html>
