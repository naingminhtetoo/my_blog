<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield("title")</title>

    @yield('header')
    {{--    bootstrap css--}}
    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">

    {{--    bootswatch css--}}
    {{--    <link href="{{ asset('asset/vendor/bootswatch/bootstrap.min.css') }}" rel="stylesheet">--}}

    {{--    bootstrap icon--}}
    <link href="{{ asset('asset/vendor/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">

{{--    fontawesome icon--}}
    <link rel="stylesheet" href="{{ asset("asset/vendor/fontawesome-free/css/all.css") }}">

{{--    animate it--}}
    <link rel="stylesheet" href="{{ asset("asset/vendor/animate_it/animate.css") }}">
    <link href="{{ asset('asset/css/app.css') }}" rel="stylesheet">

</head>
<body class="">

<div class="container-fluid m-0">
    <div class="row">
        <div class="col-12 col-md-3 col-lg-3 col-xl-2 bg-white vh-100 sidebar p-0">
            @include("admin.sidebar")
        </div>
        <div class="col-12 col-md-12 col-lg-9 col-xl-10 vh-100 main-content p-0">
            @include("admin.navbar")

            @yield("content")
        </div>
    </div>
</div>
@include("component.search-box")
@include("component.toast")

{{--fontawesome js--}}
<script src="{{ asset("asset/vendor/fontawesome-free/js/all.min.js") }}"></script>
<script src="{{ asset("asset/jquery.min.js") }}"></script>
<script src="{{ asset("asset/js/popper.js") }}"></script>
<script src="{{ asset("asset/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("asset/js/app.js") }}" ></script>
@yield("script")
<script>
    @yield("js")
</script>
</body>
</html>
