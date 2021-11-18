<!DOCTYPE html>
<html lang="en">
<body>
<li class="breadcrumb-item"><a href="/">Home</a></li>
<div id="snippetContent">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script defer type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script defer src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <div class="container bootstrap snippets bootdey"><h1 class="text-primary">Edit Profile</h1>
        <hr>
        <div class="row">
            <div class="col-md-3"></div>
            @if(session('error'))
                <span class="text-danger">{{session('error')}}</span>
            @endif
            <div class="col-md-9 personal-info"><h3>Personal info</h3>
                <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data" action="{{route('edit.profile.save')}}">
                    @csrf
                    <div class="form-group"><label class="col-lg-3 control-label">Name:</label>
                        <div class="col-lg-8"><input class="form-control" name="name" type="text" placeholder="Enter Name" required></div>
                    </div>
                    <div class="form-group"><label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-8"><input class="form-control" name="email" type="email" placeholder="example@gmail.com" required>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-lg-3 control-label">Password</label>
                        <div class="col-lg-8"><input class="form-control" name="password" type="password" value="" placeholder="Enter Password" required></div>
                    </div>

                    <button type="submit" class="btn btn-outline-primary-2 float-right">
                        <span>Save</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <hr>
    <style type="text/css">body {
            margin-top: 20px;
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
