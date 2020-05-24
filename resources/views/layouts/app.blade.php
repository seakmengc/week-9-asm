<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
       @include('layouts.header')

        <main class="py-4">
            @yield('content')
        </main>

        @include('layouts.footer')

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

         <!-- Vendor JS Files -->
  <script src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('js/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('js/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('js/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('js/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('js/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('js/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/vendor/js/main.js') }}"></script>

    </div>
</body>
</html>
