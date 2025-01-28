<!DOCTYPE html>
<html lang="fr" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/logo.webp')}}" />

  @stack('styles')

  <!-- Core Css -->
  <link rel="stylesheet" href="{{asset('assets/backend/css/styles.css')}}" />

  <title>Wuras | Admin Dashboard</title>
  <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/vendor/fontawesome-free/css/all.min.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" rel="stylesheet">

  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="{{asset('assets/backend/libs/owl.carousel/dist/assets/owl.carousel.min.css')}}" />

  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.min.css" rel="stylesheet">

</head>

<body>
  
  <!-- Preloader -->
  <div class="preloader">
    <img src="assets/backend/images/logos/preloader.svg" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <div id="main-wrapper">
    

   @include('backend.layouts.sidebar')
   
    <div class="page-wrapper">

      @include('backend.layouts.header')

      @include('backend.layouts.aside')

      <div class="body-wrapper">
          <div class="container-fluid">
              @yield('content')
          </div>
          <!----Footer--->
          <!-- -------------------------------------------------------------- -->
          <!-- footer -->
          <!-- -------------------------------------------------------------- -->
          @include('backend.layouts.footer')
          <!-- -------------------------------------------------------------- -->
          <!-- End footer -->
          <!-- -------------------------------------------------------------- -->
          <!----Footer End--->
      </div>
      <script>
        function handleColorTheme(e) {
          document.documentElement.setAttribute("data-color-theme", e);
        }
      </script>
   
  </div>
  
  <div class="dark-transparent sidebartoggler"></div>
  <script src="{{asset('assets/backend/js/vendor.min.js')}}"></script>
  <!-- Import Js Files -->
  <script src="{{asset('assets/backend/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/backend/libs/simplebar/dist/simplebar.min.js')}}"></script>
  <script src="{{asset('assets/backend/js/theme/app.init.js')}}"></script>
  <script src="{{asset('assets/backend/js/theme/theme.js')}}"></script>
  <script src="{{asset('assets/backend/js/theme/app.min.js')}}"></script>
  <script src="{{asset('assets/backend/js/theme/sidebarmenu.js')}}"></script>

  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js')}}"></script>
  <script src="{{asset('assets/backend/libs/owl.carousel/dist/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/backend/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/backend/js/dashboards/dashboard.js')}}"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>
  @include('sweetalert::alert') <!-- Affiche l'alerte de SweetAlert2 -->
  
  @stack('scripts')

</body>

</html>