<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>eCompany | @yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
<!-- {{asset('admin/css/style.css')}}
 -->  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css" rel="stylesheet')}}">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Company - v4.7.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto">
        @foreach($data3 as $logo)
        <a href="{{route('index')}}"><img src="{{asset('uploads/'. $logo->image)}}" class="img"  style="height:20px; width: 100%;"></a>
        @endforeach
      </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="{{route('index')}}" class="active">Home</a></li>

          <li class="dropdown"><a href="{{route('aboutus')}}"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('aboutus')}}">About Us</a></li>
              <li><a href="{{route('team')}}">Team</a></li>
              <li><a href="{{route('testimonial')}}">Testimonials</a></li>
            </ul>
          </li>

          <li><a href="{{route('services')}}">Services</a></li>
          <li><a href="{{route('portfolio')}}">Portfolio</a></li>
          {{-- <li><a href="pricing.html">Pricing</a></li> --}}
          <li><a href="{{route('blog')}}">Blog</a></li>
          <li><a href="{{route('contact')}}">Contact</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex">
        @foreach($data4 as $social)
        <a href="{{$social->twitter}}" class="twitter"><i class="bu bi-twitter"></i></a>
        <a href="{{$social->facebook}}" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="{{$social->instagram}}" class="instagram"><i class="bu bi-instagram"></i></a>
        <a href="{{$social->linkedin}}" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
        @endforeach
      </div>

    </div>
  </header><!-- End Header -->





@yield('content')
@include('flash-message')
@include('layouts.footer')

<!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>