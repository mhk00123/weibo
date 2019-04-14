<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{--Link CSS File --}}
    <link rel="stylesheet" href="/css/app.css">

    <title>@yield('title', 'Weibo App') - Laravel</title>
</head>
<body>

    {{--Navbar--}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Weibo App</a>
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item"><a class="nav-link" href="/help">Help</a></li>
                <li class="nav-item" ><a class="nav-link" href="#">Login</a></li>
            </ul>
        </div>
    </nav>

    {{--Content--}}
    <div class="container">
        @yield('content')
    </div>

</body>
</html>