<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('header')

    <script src="{{ asset("asset/jquery.min.js") }}"></script>
    <!-- Scripts -->
    <script src="{{ asset("asset/js/bootstrap.min.js") }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("asset/vendor/fontawesome-free/css/all.css") }}">
    <link rel="stylesheet" href="{{ asset("asset/css/app.css") }}">
</head>
<body class="login-box">
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @yield("script")
</body>
</html>
