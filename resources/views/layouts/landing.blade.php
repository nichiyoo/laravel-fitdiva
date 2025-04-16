<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=work-sans:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('landing/css/open-iconic-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/css/bootstrap-datepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/css/jquery.timepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/css/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/css/icomoon.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/css/plyr.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/css/style.css') }}">
  <style>
    .page-item.active .page-link {
      background-color: #d291bc;
      border-color: #d291bc;
    }

    .page-link,
    .page-link:hover {
      color: #d291bc;
    }

    .page-link:hover {
      background-color: #fff;
      box-shadow: 0 0 0 0.2rem rgba(210, 153, 188, 0.25);
      -webkit-box-shadow: 0 0 0 0.2rem rgba(210, 153, 188, 0.25);
    }
  </style>
  @stack('styles')
</head>

<body>
  <x-landing.navbar />

  {{ $slot }}

  <x-landing.footer />
  <x-landing.loader />

  <!-- Scripts -->
  <script src="{{ asset('landing/js/jquery.min.js') }}"></script>
  <script src="{{ asset('landing/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('landing/js/popper.min.js') }}"></script>
  <script src="{{ asset('landing/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('landing/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('landing/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('landing/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('landing/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('landing/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('landing/js/aos.js') }}"></script>
  <script src="{{ asset('landing/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('landing/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('landing/js/jquery.timepicker.min.js') }}"></script>
  <script src="{{ asset('landing/js/scrollax.min.js') }}"></script>
  <script src="{{ asset('landing/js/plyr.min.js') }}"></script>
  <script src="{{ asset('landing/js/main.js') }}"></script>
  @stack('scripts')
</body>

</html>
