<!DOCTYPE html>

<html lang="en">

<head>
    @include('layouts.partials.head')
    @yield('head')
</head>

<body>
    @include('layouts.partials.navigation')
    @include('layouts.partials.header')

    <div class="content-area">
        @yield('content')
    </div>

    @include('layouts.partials.footer')
    @include('layouts.partials.analytics')
    @yield('javascript')
</body>

</html>
