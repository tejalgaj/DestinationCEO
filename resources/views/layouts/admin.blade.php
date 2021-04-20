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

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="/"><img src="{{asset('boottheme/assets/img/DCEO Logo Metallic Gold-latest.png')}}" class="img-fluid dest-logo-img" alt="">Destination CEO</a></h1>
    
      <nav class="nav-menu d-none d-lg-block">
      <ul>
      <li class={{ Request::path()==='/'?'active':''}}><a href="/admin">Home</a></li>
          
          <li class={{ Request::path()==='contact'?'active':''}}><a href="/contact_details">Edit Address</a></li>

         <li class="drop-down"><a href="#">Manage Information</a>
          <ul>
            <li><a href="/upload_template">Upload templates</a></li>
            <li><a href="/upload_template_form">Manage templates</a></li>
            <li><a href="/admin/socialLinks">Manage social widgets</a></li>
            <li ><a href="/admin/aboutUs">Manage AboutUs</a></li>

          </ul>
        </li>
         
         <li class={{ Request::path()==='googlereviews'?'active':''}}><a href="/googlereviews">Testimonial</a></li>
           
          
       
         
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
          <h3>Address Details:</h3>
            <p>
             
            <b> Address:</b> <span id='footer_address'></span><br/>
             <b>Phone: </b><span id='footer_phone'></span><br/>
             <b> Email: </b><span id='footer_email'></span> <br/>
            </p>
          </div>

      <div class="footer-text" style="width: 40rem;">
             
           
           <p>Copyright © {{date("Y")}} | Destination CEO | All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        
       
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        @foreach ($admin_social_links_files as $adminSocialLinksFile)
          <a href="{{$adminSocialLinksFile['twitter'] }}" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>  
          <a href="{{$adminSocialLinksFile['facebook'] }}" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
          <a href="{{$adminSocialLinksFile['instagram'] }}" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
          <a href="{{$adminSocialLinksFile['google'] }}" class="google-plus" target="_blank"><i class="bx bxl-google"></i></a>
          <a href="{{$adminSocialLinksFile['linkedIn'] }}" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
          @endforeach
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
        
      document.getElementById('footer_address').innerHTML='{{$admin_address_detail['address']}}' + " "+
    '{{$admin_address_detail['city']}}' + " " +'{{$admin_address_detail['province']}}'+" "+'{{$admin_address_detail['country']}}';
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