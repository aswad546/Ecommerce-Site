<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
@if(session('user_id'))
    <h1>USER LOGGED IN</h1>
@endif
<body>
    <h3>Login</h3>
    <form method="post" enctype="multipart/form-data" action="/login">
        @csrf
        <input type="text" placeholder="Email" name="email" required><br>
        <input type="password" placeholder="Password" name="password" required><br>
        <button type="submit">Login</button>
    </form>

    <h3>Register</h3>
    <form method="post" enctype="multipart/form-data" action="/register">
        @csrf
        <input type="text" placeholder="Name" name="name" required><br>
        <input type="text" placeholder="Email" name="email" required><br>
        <input type="password" placeholder="Password" name="password" required><br>
        <button type="submit">Register</button>
    </form>

</body>
</html>
