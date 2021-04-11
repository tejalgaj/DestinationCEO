<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<script src="https://use.fontawesome.com/6bb3f96480.js"></script>
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Destination CEO') }}</title> --}}
    <title>Destination CEO</title>
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

      <h1 class="logo mr-auto"><a href="/">Destination CEO</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
      <ul>
          <li class={{ Request::path()==='/'?'active':''}}><a href="/">Home</a></li>
          <li class={{ Request::path()==='about'?'active':''}}><a href="#">About</a></li>
          <li class={{ Request::path()==='resume-builder'?'active':''}}><a href="/resume-builder">Resume Builder</a></li>
          <li class={{ Request::path()==='resume-scan'?'active':''}}><a href="/resume-scan">Scanning</a></li>
           
          <li class={{ Request::path()==='contact'?'active':''}}><a href="/contact">Contact</a></li>

        
         
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
         
             <!-- Button trigger modal -->
             <?php  $selected_template = session('resume_selected_template', 'default')?>
             @auth
             @if (Request::path()==='skills' && $selected_template!="default")
             <button type="button" class="btn btn-outline-secondary btn-sm m-3 preview-iframe" data-toggle="modal" data-target="#exampleModal" style="background-color:  #6c757d;color:#fff">
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
<div class="modal-body">
  <iframe src="" width="100%" height="900" id="ifrm"></iframe> 
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <a name="" id="" class="btn btn-primary" href="{{route('resume-format.resume.download')}}"
  role="button">PDF</a>
  <a name="" id="" class="btn btn-primary" href="{{route('resume-format.resume.DOCdownload')}}"
  role="button">DOC</a> 
  <a name="" id="" class="btn btn-primary" href="{{route('resume-format.resume.TXTdownload')}}"
  role="button">TXT</a>
  
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
              <!--A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>-->
            <b> Address:</b> <span id='footer_address'></span></br>
             <b>Phone: </b><span id='footer_phone'></span></br>
             <b> Email: </b><span id='footer_email'></span> </br>
            </p>
          </div>

<!--
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
      -->
      <div class="footer-text" style="width: 40rem;">
            
           
           <p> <b>Disclaimer-</b>The information contained on this site was correct at the time it was posted. Be aware that it is possible there may have been subsequent changes, 
           which make the information outdated at the time you are accessing it. </p>
           <p>Copyright © 2021 | Destination CEO | All Rights Reserved</p>
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


<script>
  
    @foreach($admin_address_details as $admin_address_detail)
    {
        
    document.getElementById('footer_address').innerHTML='{{$admin_address_detail['address']}}' + " ,"+
    '{{$admin_address_detail['city']}}' + " ," +'{{$admin_address_detail['province']}}'+" ,"+'{{$admin_address_detail['country']}}';
    document.getElementById('footer_phone').innerHTML='{{$admin_address_detail['phone']}}';
    document.getElementById('footer_email').innerHTML='{{$admin_address_detail['email']}}';
    
    }
    @endforeach

  $( ".preview-iframe" ).click(function() {
    let _url     = '/resume/getPreviewUrl';
    let _token   = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: _url,
        type: "GET",
       
        success: function(response) {
            if(response.code == 200) {
              
              //window.location = "/technical-experience";
             let preview_url = response.data;
             $("#ifrm").attr("src", preview_url);
            }
        },
        error: function(response) {
          console.log(response.responseJSON);
        }
      });
    //
});


  
  </script>
  

</body>

</html>