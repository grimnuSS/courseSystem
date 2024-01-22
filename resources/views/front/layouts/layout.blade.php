<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>grimCourse | Kendini Geliştir, Hayatını Geliştir!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @guest
    <meta name="user_id" content="">
    @else
    <meta name="user_id" content="{{ Auth::user()->id }}">
    @endguest

    <link rel="icon" type="image/x-icon" href="{{asset('instruct')}}/assets/img/favicon/favicon.ico" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="{{asset('/')}}fonts/icomoon/style.css">
    <link rel="stylesheet" href="{{asset('/')}}fonts/material-icon/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('/')}}css/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('/')}}css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('/')}}css/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{asset('/')}}css/aos.css">
    <link rel="stylesheet" href="{{asset('/')}}css/style.css">
    <link rel="stylesheet" href="{{asset('/')}}css/login_style.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>

<div class="site-wrap">
    <div id="app">
        @if (!isset($page))
            @php $page = 'Anasayfa' @endphp
        @endif
        @if (!isset($subpage))
            @php $subpage = 'Anasayfa' @endphp
        @endif

        @include('front.inc.header')

        @yield('content')

        @include('front.inc.footer')
    </div>
</div>

<script src="{{asset('/')}}js/jquery-3.3.1.min.js"></script>
<script src="{{asset('/')}}js/jquery-ui.js"></script>
<script src="{{asset('/')}}js/popper.min.js"></script>
<script src="{{asset('/')}}js/bootstrap.min.js"></script>
<script src="{{asset('/')}}js/owl.carousel.min.js"></script>
<script src="{{asset('/')}}js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('/')}}js/aos.js"></script>

<script src="{{asset('/')}}js/main.js"></script>


</body>
</html>
