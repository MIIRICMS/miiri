<!DOCTYPE html>

<html>
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive Laravel Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, laravel, theme, front-end, ui kit, web">

    <title>MIIRI| Home Page</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

  <!-- CSRF Token -->
  <meta name="_token" content="{{ csrf_token() }}">

  <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">

  <!-- plugin css -->
  <link href="{{ asset('assets/fonts/feather-font/css/iconfont.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" />
  <!-- end plugin css -->

  @stack('plugin-styles')

  <!-- common css -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/update.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/css_cbrmMx4eceAxd8Mkv9FI_RW9uqeLnuTVjgE8vfHMDxw.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/css_sn8H3j4q31o9yOhm2p9NtGtJLmaCzSWAtkW5420gIA4.css') }}" rel="stylesheet" />
  <link href="{{ asset('fonts/Source+Sans+Pro.css') }}" rel="stylesheet" />
  <link href="{{ asset('fonts/Great+Vibes.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/css_I7RNaJANgIQSJ3rw79VJ_zxkHEGcnLsEj_6Kjz9WOMg.css') }}" rel="stylesheet" />
  <!-- end common css -->

  @stack('style')

    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/js/js_vjrewt9Ub_VdOnWG7fQvzLvZnbEPsJs5UlnSApFDVF0.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr-additional-tests.js') }}"></script>
    <script src="{{ asset('assets/js/js_LL-tu-FzmyVv-DCcfvhtKufGKXyaMPhkHOchM-vxfdQ.js') }}"></script>
    <script src="{{ asset('assets/js/js_j1ckyXQG9yqqLBtUdQfUv9NJH73JWjQe8u9HKoYi8Qg.js') }}"></script>
    <script src="{{ asset('assets/js/js_7XJpcZBTJIU_w2XeW2BPlOEFNC_WlG5sD-oD-mTu14Q.js') }}"></script>
    <script src="{{ asset('assets/js/js_3HynBIaBTY17Zkd0E4D4bsSBkMfJW3GQuFvhJb4qvcg.js') }}"></script>
</head>
{{--<body data-base-url="{{url('/')}}">--}}
<body class="hidden-title footer-black layout-no-sidebars wide footer-black js-preloader frontpage node--type-page">

  <script src="{{ asset('assets/js/spinner.js') }}"></script>

  @yield('content')

{{--  <div class="main-wrapper" id="app">--}}
{{--    @include('layout.sidebar')--}}
{{--    <div class="page-wrapper">--}}
{{--      @include('layout.header')--}}
{{--      <div class="page-content">--}}
{{--        @yield('content')--}}
{{--      </div>--}}
{{--      @include('layout.footer')--}}
{{--    </div>--}}
{{--  </div>--}}

    <!-- base js -->
{{--    <script src="{{ asset('js/app.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/plugins/feather-icons/feather.min.js') }}"></script>--}}
{{--  <script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>--}}

  <!-- end base js -->

    <!-- plugin js -->
    @stack('plugin-scripts')
    <!-- end plugin js -->

    <!-- common js -->
    <script src="{{ asset('assets/js/template.js') }}"></script>
    <!-- end common js -->

    @stack('custom-scripts')
</body>
</html>
