<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('boottheme/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('boottheme/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('boottheme/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('boottheme/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('boottheme/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('boottheme/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('boottheme/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('boottheme/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('boottheme/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  @stack('datepicker-styles')

  <!-- Template Main CSS File -->
  <link href="{{asset('boottheme/assets/css/style.css')}}" rel="stylesheet">

  <style>
    .active{
      font-weight: bold;
    }
    </style>

  <!-- =======================================================
  * Template Name: Mentor - v2.2.1
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="/">Dest CEO</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class={{ Request::path()==='/'?'active':''}}><a href="/">Home</a></li>
          <li class={{ Request::path()==='about'?'active':''}}><a href="#">About</a></li>
          
          <li class={{ Request::path()==='resume-builder'?'active':''}}><a href="/resume-builder">Resume Builder</a></li>
       
           <!-- Authentication Links -->
           @guest
           @if (Route::has('login'))
               <li class="nav-item">
                   <a  href="{{ route('login') }}">{{ __('Login') }}</a>
               </li>
           @endif
           
           @if (Route::has('register'))
               <li class="nav-item">
                   <a  href="{{ route('register') }}">{{ __('Register') }}</a>
               </li>
           @endif
       @else
           <li class="nav-item dropdown">
               <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                   {{ Auth::user()->name }}
               </a>

               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                       {{ __('Logout') }}
                   </a>

                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                       @csrf
                   </form>
               </div>
           </li>
       @endguest
          <li><a href="contact.html">Contact</a></li>
             <!-- Button trigger modal -->
             <?php $selected_template = session('resume_selected_template', 'default')?>
             @auth
             @if (Request::path()==='skills' && $selected_template!="default")
             <button type="button" class="btn btn-outline-secondary btn-sm m-3" data-toggle="modal" data-target="#exampleModal">
                Preview
                </button>
                @endif
             @endauth

        </ul>
        
      </nav><!-- .nav-menu -->

      

    </div>
  </header><!-- End Header -->

  @yield('main-content')
  
  <script src="{{asset('boottheme/assets/vendor/jquery/jquery.min.js')}}"></script>
  
  @stack('datepicker-js')
  


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-xl" role="document">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">Preview</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body" >
  <iframe src="{{route('resume.index')}}" width="100%" height="900"> </iframe> 
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <a name="" id="" class="btn btn-primary" href="{{route('resume.download')}}"
  role="button">Download</a> 
  
</div>
</div>
</div>
</div>
  
  @yield('content')
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Mentor</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        
       
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  
  <script src="{{asset('boottheme/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('boottheme/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('boottheme/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('boottheme/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('boottheme/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('boottheme/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('boottheme/assets/vendor/aos/aos.js')}}"></script>
  
  <!-- Template Main JS File -->
  <script src="{{asset('boottheme/assets/js/main.js')}}"></script>
  

</body>

</html>