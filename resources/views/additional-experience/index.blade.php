@extends('layouts.app')

@section('content')
<main id="main">
    <section id="about" class="about">
         <div class="container" data-aos="fade-up">
          <x-form.nav></x-form.nav>
          <div class="section-title">
            <h2>Welcome to CV Builder</h2>
            
            <p>Additional Experience</p>
          </div>
        
          
          @foreach ($additionalExperiences as $ad_exp)
          <div class="card mt-3">
            <div class="card-header">
              {{$ad_exp->role}}
            </div>
            <div class="card-body">
              <h5 class="card-title">{{$ad_exp->role}}</h5>
              <p class="card-text">{{$ad_exp->responsibilities}}</p>
              <a href="{{route('additional-experience.edit',$ad_exp)}}" class="btn btn-sm btn-primary" role="button">Edit</a>
              <form action={{route('additional-experience.destroy',$ad_exp)}} method="POST" class="mt-2" style="display: inline">
@csrf
@method('DELETE')
<input type="submit" value="Delete" class="btn btn-sm btn-danger">
            </form>
              
            </div>
          </div>
      
      @endforeach
          

      <a href="{{route('additional-experience.create')}}" role="button">+Add Another Experience</a>
              
          
           
         
      <div class="row mt-3">
        <div class="col text-left">
            <a class="btn btn-secondary" href=" {{route('experience.index')}} " role="button">Back</a>
        </div>

       
    
        <div class="col text-right">
          <a class=" btn btn-primary" href=" {{route('skills.index')}} " role="button">Skip</a>
        </div>
    </div>
     
       
     
         </div>
         
         
       </section>
 </main>


@endsection