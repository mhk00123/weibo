<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{--Link CSS File --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <title>@yield('title', 'Weibo App') - Laravel</title>
</head>
<body>

    {{--Navbar--}}
    @include('layouts._header')

    {{--Content--}}
    <div class="container">
        <div class="offset-md-1 col-md-10">
            {{--Error Message--}}
            @include('shared._messages')

            {{--Content--}}
            @yield('content')

            {{--Footer--}}
            @include('layouts._footer')
        </div>
    </div>

    {{--引入app.js--}}
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>