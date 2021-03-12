@extends('layouts.app')

@section('content')
<main id="main">
    <section id="about" class="about">
         <div class="container" data-aos="fade-up">
          <x-form.nav></x-form.nav>
          <div class="section-title">
            <h2>Welcome to CV Builder</h2>
            
            <p>Highlights</p>
          </div>
        
         
          
          <div class="card mt-3">
            <div class="card-header">
              {{$highlight->communication_language}}
            </div>
            <div class="card-body">
              <h5 class="card-title">{{$highlight->communication_language}}</h5>
              <p class="card-text">{{$highlight->communication_language}}</p>
             
              <a href="{{route('highlight.edit',$highlight)}}" class="btn btn-sm btn-primary" role="button">Edit</a>
              
              
            </div>
          </div>
      
    
          

      
              
          
           
         
      <div class="row mt-3">
        <div class="col text-left">
            <a class="btn btn-secondary" href=" {{route('technical-experience.index')}} " role="button">Back</a>
        </div>

       
    
        <div class="col text-right">
          <a class=" btn btn-primary" href=" {{route('additional-experience.index')}} " role="button">Skip</a>
        </div>
    </div>
     
       
     
         </div>
         
         
       </section>
 </main>


@endsection