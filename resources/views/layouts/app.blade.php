<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.0.2
* @link https://coreui.io
* Copyright (c) 2021 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<!-- Breadcrumb-->
<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Bumdesmall</title>
    <link rel="shortcut icon" type="image/jpg" href="{{asset('favicon.ico')}}"/>
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendors styles-->
    <link rel="stylesheet" href="{{asset('vendors/simplebar/css/simplebar.css')}}">
    <link rel="stylesheet" href="{{asset('css/coreui/vendors/simplebar.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/@coreui/icons/css/free.min.css')}}">

    {{--  optional css  --}}
    @stack('css')

    <!-- Main styles for this application-->
    <link href="{{asset('css/coreui/style.css')}}" rel="stylesheet">
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        // Shared ID
        gtag('config', 'UA-118965717-3');
        // Bootstrap ID
        gtag('config', 'UA-118965717-5');
    </script>
</head>
<body>

{{--START SIDEBAR MENU--}}
@include('layouts.partials.menu')
{{--END SIDEBAR MENU--}}

<div class="wrapper d-flex flex-column min-vh-100 bg-light">
    <header class="header header-sticky mb-4">
        @include('layouts.partials.header')
    </header>
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            @yield('content')
        </div>
    </div>
    <footer class="footer">
        @include('layouts.partials.footer')
    </footer>
</div>
<!-- CoreUI and necessary plugins-->
<script src="{{asset('vendors/@coreui/coreui/js/coreui.bundle.min.js')}}"></script>
<script src="{{asset('vendors/simplebar/js/simplebar.min.js')}}"></script>

<!-- Plugins and scripts required by this view-->
@stack('js')

<script src="{{asset('vendors/@coreui/utils/js/coreui-utils.js')}}"></script>
<script src="{{asset('js/coreui/main.js')}}"></script>

</body>
</html>
