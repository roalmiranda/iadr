<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('imagesiadr/logo/iconoIADR.png') }}">
    <!-- Site Title  -->
    <title>IADR Bolivia</title>
    <!-- Bundle and Base CSS -->
    <link rel="stylesheet" href="{!! asset('assets/css/vendor.bundle.css?ver=210') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/style-jasmine.css?ver=210') !!}">
    <!-- Extra CSS -->
    <link rel="stylesheet" href="{!! asset('assets/css/theme.css?ver=210') !!}">
    <style>
        /* Movimiento de imagenes */
        
        .img_move {
            animation: moveUpDown 4s ease-in-out infinite;
        }

        @keyframes moveUpDown {
            0%, 100% {
            transform: translateY(-4%);
            }
            50% {
            transform: translateY(4%);
            }
        }
        
        .zoom-animation {
            animation: zoom 4s ease-in-out infinite;
        }

        @keyframes zoom {
            from {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            to {
                transform: scale(1);
            }
        }
        /* SLIDER */
        .slider {
        position: relative;
        overflow: hidden;
        width: 100%;
        height: 500px;
        }

        .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 100%;
            transition: left 2s;
        }

        .slide img {
        object-fit: cover;
        }

        .slider .active {
        left: 0;
        }
    </style>    
    @yield('header')
</head>

<body class="nk-body body-wider mode-onepage">
    @php($url = "http://iadr-admin.test/")
    <div class="nk-wrap">
        <header class="nk-header page-header is-sticky is-shrink is-transparent is-light" id="header">
            <!-- Header @s -->
            @include('layouts.header')
            <!-- .header-main @e -->
            <!-- Banner @s -->
            @yield('banner')
            <!-- .header-banner @e -->
        </header>
        <main class="nk-pages">
        	@yield('content')
        </main>
        <!-- Footer -->
        @include('layouts.footer')
    </div>
    <!-- Preloader -->
    <div class="preloader"><span class="spinner spinner-round"></span></div>
    <!-- JavaScript -->
    <script src="{!! asset('assets/js/jquery.bundle.js?ver=210') !!}"></script>
    <script src="{!! asset('assets/js/scripts.js?ver=210') !!}"></script>
    <script src="{!! asset('assets/js/charts.js?ver=210') !!}"></script>
    <script src="{!! asset('assets/js/charts.js?ver=210') !!}"></script>
    <!-- Script -->
    @yield('script_dev')

</body>

</html>