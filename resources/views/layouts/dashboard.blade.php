<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('dashboard/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/vendors/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/vendors/font-awesome/css/font-awesome.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('dashboard/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}">
  <style>
    .page-item {
      line-height: 1.5;
    }

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

    .form-select {
      border: 1px solid #ebedf2;
      font-family: "ubuntu-regular", sans-serif;
      display: block;
      width: 100%;
      padding: 0.94rem 1.375rem !important;
      font-size: 0.8125rem;
      line-height: 1;
      appearance: none;
      color: var(--bs-body-color) !important;
      border: var(--bs-border-width) solid var(--bs-border-color);
      border-radius: 2px;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      box-shadow: none;
      -webkit-box-shadow: none;
    }

    .form-select:focus {
      box-shadow: none;
      -webkit-box-shadow: none;
    }

    textarea:not(.editor) {
      line-height: 1.2;
    }
  </style>
  @stack('styles')
</head>

<body>
  <div class="container-scroller">
    <x-dashboard.navbar />
    <div class="container-fluid page-body-wrapper">
      <x-dashboard.sidebar />
      <div class="main-panel">
        <div class="content-wrapper">
          @if (session('success'))
            <p class="text-success mb-4">
              {{ session('success') }}
            </p>
          @endif

          {{ $slot }}
        </div>
        <x-dashboard.footer />
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="{{ asset('dashboard/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('dashboard/vendors/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('dashboard/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('dashboard/js/off-canvas.js') }}"></script>
  <script src="{{ asset('dashboard/js/misc.js') }}"></script>
  <script src="{{ asset('dashboard/js/settings.js') }}"></script>
  <script src="{{ asset('dashboard/js/todolist.js') }}"></script>
  <script src="{{ asset('dashboard/js/jquery.cookie.js') }}"></script>
  <script src="{{ asset('dashboard/js/dashboard.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/7.6.1/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: 'textarea.editor',
      content_css: 'writer',
      license_key: 'gpl',
      plugins: 'lists',
      statusbar: false,
      menubar: false,
      height: 720,
      toolbar: 'undo redo | blocks | bold italic underline | alignleft aligncenter alignright | indent outdent | bullist numlist'
    });
  </script>
  @stack('scripts')
</body>
