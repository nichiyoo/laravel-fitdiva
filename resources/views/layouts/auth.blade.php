<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=ubuntu:300,400,500,700" rel="stylesheet" />

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('dashboard/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/vendors/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}">
  @stack('styles')
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row flex-grow">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <a href="{{ route('landing.index') }}">
                  <x-logo />
                </a>
              </div>
              {{ $slot }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="{{ asset('dashboard/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('dashboard/js/off-canvas.js') }}"></script>
  <script src="{{ asset('dashboard/js/misc.js') }}"></script>
  <script src="{{ asset('dashboard/js/settings.js') }}"></script>
  <script src="{{ asset('dashboard/js/todolist.js') }}"></script>
  <script src="{{ asset('dashboard/js/jquery.cookie.js') }}"></script>
  @stack('scripts')
</body>

</html>
