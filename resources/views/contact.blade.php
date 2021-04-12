@extends('layouts.app')
@section('content')

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
  <div class="container">
    <h2>Contact Us</h2>
    <p>We are here to serve you in a better way</p>
  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div data-aos="fade-up">
    <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d184986.03951129192!2d-79.63443189584984!3d43.57724093151385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b469fe76b05b7%3A0x3146cbed75966db!2sMississauga%2C%20ON!5e0!3m2!1sen!2sca!4v1617856027163!5m2!1sen!2sca" frameborder="0" allowfullscreen></iframe>
  </div>

  <div class="container" data-aos="fade-up">

    <div class="row mt-5">

      <div class="col-lg-4">
        <div class="info">
          <div class="address">
            <i class="icofont-google-map"></i>
            <h4>Location:</h4>
            <div id="location"></div>
          </div>

          <div class="email">
            <i class="icofont-envelope"></i>
            <h4>Email:</h4>
            <div id="email"></div>
          </div>

          <div class="phone">
            <i class="icofont-phone"></i>
            <h4>Call:</h4>
            <div id="phone"></div>
          </div>

        </div>

      </div>

      <div class="col-lg-8 mt-5 mt-lg-0">
      @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
        @endif

      <form method="POST" action="/contact" >
      @csrf
              <div class="form-row">
                <div class="col-md-6 form-group" >
                  <input type="text" name="name" required="required" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" required="required" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" required="required" name="phone" id="subject" placeholder="Your Contact number" data-rule="minlen:4" data-msg="Please enter at valid Phone number" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" required="required" name="query" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
               
                <div class="error-message"></div>
                
              </div>
              <div class="text-center"><button class="btn btn-primary" type="submit">Send Message</button></div>
            </form>

      </div>

    </div>

  </div>
  <script>
   @foreach($admin_address_details as $admin_address_detail)
    {
        
    document.getElementById('location').innerHTML='{{$admin_address_detail['address']}}' + " "+
    '{{$admin_address_detail['city']}}' + " " +'{{$admin_address_detail['province']}}'+" "+'{{$admin_address_detail['country']}}';
    document.getElementById('phone').innerHTML='{{$admin_address_detail['phone']}}';
    document.getElementById('email').innerHTML='{{$admin_address_detail['email']}}';
    
    }
    @endforeach
  </script>
</section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection