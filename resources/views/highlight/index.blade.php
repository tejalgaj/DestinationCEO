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
              <h5 class="card-title">
                @if(count($highlight->hard_skills)>0)
                @foreach ($highlight->hard_skills as $key=>$value)
                        {{$value}}
                @endforeach
                @endif
              </h5>
              <p class="card-text">{{$highlight->objective}}</p>
             
              <a href="{{route('highlight.edit',$highlight)}}" class="btn btn-sm btn-dark" role="button">Edit</a>
              
              
            </div>
          </div>
      
    
          

      
              
          
           
         
      <div class="row mt-3">
        <div class="col text-left">
            <a class="btn btn-secondary" href=" {{route('technical-experience.index')}} " role="button">Back</a>
        </div>

       
    
        <div class="col text-right">
          <a class=" btn btn-dark {{ ($highlight_status_count < 1)?'disabled':''}}" href=" {{route('additional-experience.index')}} " role="button">Additional Experience</a>
        </div>
    </div>
     
       
     
         </div>
         
         
       </section>
 </main>


@endsection