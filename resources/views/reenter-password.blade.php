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
        <div class="col-md-9 personal-info"><h3>Enter new password</h3>
            <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data" action="{{route('forgot.password.update', $id)}}">
                @csrf
                <div class="form-group"><label class="col-lg-3 control-label">Password</label>
                    <div class="col-lg-8"><input class="form-control" name="password" type="password" value="" placeholder="Enter Password" required></div>
                </div>

                <button type="submit" class="btn btn-outline-primary-2">
                    <span> Save</span>
                </button>
            </form>
        </div>

        <style type="text/css">body {
                margin-top: 100px;
            }

            .avatar {
                width: 200px;
                height: 200px;
            }</style>
        <script type="text/javascript"></script>
    </div>


    <script type="text/javascript">(function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-49755460-1', 'auto', {'allowLinker': true});
        ga('require', 'linker');
        ga('linker:autoLink', ['bootdey.com', 'www.bootdey.com', 'demos.bootdey.com']);
        ga('send', 'pageview');</script>
</body>
</html>

