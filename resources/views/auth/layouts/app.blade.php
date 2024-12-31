<!DOCTYPE html>
<html lang="en">
    <head>
      <!-- Required meta tags-->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
      <!-- shortcut icon-->
      <link rel="icon" href="{{ asset('assets/images/logo/logo.png') }}" type="image/x-icon">
      <link rel="shortcut icon" href="{{ asset('assets/images/logo/logo.png') }}" type="image/x-icon">
      <!-- Fonts css  -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&amp;display=swap" rel="stylesheet">
      <!-- Font awesome -->
      <link href="{{ asset('assets/css/vendor/font-awesome.css') }}" rel="stylesheet">
      <!-- Scrollbar-->
      <link href="{{ asset('assets/css/vendor/simplebar.css') }}" rel="stylesheet">
      <!-- Bootstrap css-->
      <link href="{{ asset('assets/css/vendor/bootstrap.css') }}" rel="stylesheet">
      <!-- Custom css-->
      <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    </head>
  <body>  
    <!-- Login Start-->
    @yield('content')
    <!-- Login End-->
      <!-- main jquery-->
      <script src="assets/js/jquery-3.7.1.min.js"></script>
      <!-- Config -->
      <script src="assets/js/layout-config.js"></script>
      <!-- Customizer-->
      <script src="assets/js/customizer.js"></script>
      <!-- Feather icons js-->
      <script src="assets/js/icons/feather-icon/feather.js"></script>
      <!-- Bootstrap js-->
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <!-- Scrollbar-->
      <script src="assets/js/vendors/simplebar.js"></script>
      <!-- Custom script-->
      <script src="assets/js/custom-script.js"></script>
  </body>
</html>