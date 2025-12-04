<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title')</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/user/assets/img/swift_logo.png') }}" rel="icon">
  <link href="{{ asset('assets/user/assets/img/swift_logo.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/fancybox/fancybox.css" />
  <link href="{{ asset('assets/user/assets/vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/user/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/user/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/user/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/user/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  

  <!-- Main CSS File -->
  <link href="{{ asset('assets/user/assets/css/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/user/assets/css/owl.theme.default.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/user/assets/css/hovereffect.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/user/assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bell
  * Template URL: https://bootstrapmade.com/bell-free-bootstrap-4-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .mainNav {
      top: 119px;
    }
    .text-blod {
      font-weight: 700;
    }
    /* team css is hare */
    .team-shadow {
      box-shadow: 0px 2px 8px 2px rgb(0 0 0 / 78%) !important;
      border-radius: 0px;
    }
    .team-border {
      border: 0px;
    }
    .bg-team-body {
      background-color: rgb(233 222 222 / 52%) !important;
    }
    /* team css is hare */
    .g-img {
      position: relative;
      display: inline-block;
      padding-bottom: 20px;
    }
    .g-img::after {
      content: "";
      position: absolute;
      left: 0;
      bottom: 0;
      width: 100%;
      height: 25px;
      background: url('{{ asset('assets/user/assets/img/border-img.png') }}') no-repeat center bottom;
      background-size: contain;
    }
    .nav_shadow{
      box-shadow:0px 3px 12px -3px #000000c2;
      
    }
    @media screen and (max-width:900px){
      .mainNav{
        top: 88px;
      }
    }
  </style>
  @stack('style')
</head>
<body class="index-page">
  @include('user.layout.topbar')
  @include('user.layout.topbar2') 
  @include('user.layout.header')
  <main class="main">
    @yield('content')
  </main>
  @include('user.layout.footer')
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
  <!-- Preloader -->
  <div id="preloader"></div>
  <!-- Vendor JS Files -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="{{ asset('assets/user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- <script src="{{ asset('assets/user/assets/vendor/php-email-form/validate.js') }}"></script> -->
  <script src="{{ asset('assets/user/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/user/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/user/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/user/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/user/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/fancybox/fancybox.umd.js"></script>
  <script src="{{ asset('assets/user/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/user/assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/user/assets/js/main.js') }}"></script>


  @stack('script')



</body>

</html>