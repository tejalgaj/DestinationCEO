@extends('layouts.app')

@section('main-content')
<main id="main">
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
      <h2>Let's get started.</h2>
      
    </div>
  </div>
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <img src="{{asset('boottheme/assets/img/resume.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <ul class="hiw-ul">
            <li class="hiw-li">
              <h3 class="list-title">Select a Template</h3>
              <p class="list-text">First, pick one of our approved templates to personalize and format your resume.</p>
            </li>
            <li class="hiw-li">
              <h3 class="list-title">Enter Your Information</h3>
              <p class="list-text">You can enter your details to enhance your resume.</p>
            </li>
            <li class="hiw-li">
              <h3 class="list-title">Download and Print</h3>
              <p class="list-text">Your resume is ready to share!</p>
            </li>
          </ul>
          
          <button type="button" class="btn btn-primary"><a href="/resume-template">Build your resume now</a></button>

        </div>
      </div>

    </div>
  </section><!-- End About Section -->
   
</main>
@endsection