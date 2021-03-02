@extends('layouts.app')

@section('main-content')
<main id="main">
   <section id="about" class="about">
        <div class="container" data-aos="fade-up">
    
          <div class="section-title">
            <h2>Welcome to CV Builder</h2>
            
            <p>Welcome to CV Builder</p>
          </div>
    
          <button type="button" class="btn btn-primary"><a href="{{route('user-detail.index')}}">Build your resume now</a></button>
    
        </div>
      </section>
</main>
@endsection