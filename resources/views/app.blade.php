<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Flat, Clean, Responsive, application admin template built with bootstrap 3">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <title> @yield('title') </title> @yield('css')
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datepicker/datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/skins/palette.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fonts/font.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <script src="{{ asset('assets/plugins/modernizr.js') }}"></script>
</head>

<body>
    <div class="app">
      @include('header')
        <section class="layout"> @yield('content') </section>
    </div>
    <script src="{{ asset('assets/plugins/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/appear/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery.placeholder.js') }}"></script>
    <script src="{{ asset('assets/plugins/fastclick.js') }}"></script>
    <script src="{{ asset('assets/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/offscreen.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>@yield('js')</body>

</html>
