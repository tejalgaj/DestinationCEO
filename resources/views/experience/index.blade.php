@extends('layouts.app')

@section('content')
<main id="main">
    <section id="about" class="about">
         <div class="container" data-aos="fade-up">
          <x-form.nav></x-form.nav> 
          <div class="section-title">
            <h2>Welcome to CV Builder</h2>
            
            <p>Work summary</p>
          </div>
        
          
          @foreach ($experiences as $exp)
          <div class="card mt-3">
            <div class="card-header">
              {{$exp->job_title}}
            </div>
            <div class="card-body">
              <h5 class="card-title">{{$exp->employer}}</h5>
              <p class="card-text">{{$exp->country}}</p>
              <a href="{{route('experience.edit',$exp)}}" class="btn btn-sm btn-primary" role="button">Edit</a>
              <form action={{route('experience.destroy',$exp)}} method="POST" class="mt-2" style="display: inline">
@csrf
@method('DELETE')
<input type="submit" value="Delete" class="btn btn-sm btn-danger">
            </form>
              
            </div>
          </div>
      
      @endforeach
          

     
              
          
           
         
        
      <a href="{{route('experience.create')}}" role="button">+Add Another Experience</a>
      <div class="row mt-3">
        <div class="col text-left">
            <a class="btn btn-secondary" href=" {{route('education.index')}} " role="button">Back</a>
        </div>
    
        <div class="col text-right">
         
          <a class=" btn btn-primary" href=" {{route('technical-experience.index')}} " role="button">Technical Experience</a>
      
            
        </div>
    </div>
     
         </div>
         

        

         
       </section>
 </main>


@endsection