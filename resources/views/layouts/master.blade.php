<!DOCTYPE html>

<html lang="en">

<head>

    <title>Chris Kankiewicz &bull; Full Stack Web Developer</title>
    <link href="{{ asset('img/favicon.ico') }}" rel="shortcut icon" type="image/vnd.microsoft.icon">

    <!-- META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- STYLES / FONTS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- SCRIPTS -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

</head>

<body>

    @include('partials.navigation')
    @include('partials.header')

    <div class="content-area">
        @yield('content')
    </div>

    @include('partials.footer')

    @yield('javascript')

    @include('partials.google-analytics')

</body>

</html>
