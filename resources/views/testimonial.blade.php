@extends('layouts.app')
@section('content')
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Testimonials</title>
  <link href="{{asset('boottheme/assets/css/testimonial.css')}}" rel="stylesheet">
  
  <link href= "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel= "stylesheet">
  
</head>
<main>

<body>
    <section class = "testimonials">
        <div class="container">
            <h1> Testimonials </h1>
            <p class ="text-center">Reviews</p>
            
        <div class="row">
        @foreach($testimonials as $testimonial)
        
        
        <div class="col-md-4 text-center">
                <div class="profile">
                
                <img src="{{ asset('uploads/testimonial/' . $testimonial->image )}}" width="100px"  height="100px" alt="image" class="user" >
                <blockquote>
                {{ $testimonial->view}}
                </blockquote>
                <h3> {{ $testimonial->name}} <span> {{ $testimonial->jobtitle}}</span></h3>
                
                </div>
                </div>
                @endforeach
        </div>
       
        

        </div>
    </section>







</body>
</main>
@endsection