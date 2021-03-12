@extends('layouts.app')

@section('content')
<main id="main">
    <section id="about" class="about">
         <div class="container" data-aos="fade-up">
          <x-form.nav></x-form.nav>
          <div class="section-title">
            <h2>Welcome to CV Builder</h2>
            
            <p>Technical Experience</p>
          </div>
        
          
          @foreach ($technicalExperiences as $tech_exp)
          <div class="card mt-3">
            <div class="card-header">
              {{$tech_exp->project_title}}
            </div>
            <div class="card-body">
              <h5 class="card-title">{{$tech_exp->project_title}}</h5>
              <p class="card-text">{{$tech_exp->technology_stack}}</p>
              <a href="{{route('technical-experience.edit',$tech_exp)}}" class="btn btn-sm btn-primary" role="button">Edit</a>
              <form action={{route('technical-experience.destroy',$tech_exp)}} method="POST" class="mt-2" style="display: inline">
@csrf
@method('DELETE')
<input type="submit" value="Delete" class="btn btn-sm btn-danger">
            </form>
              
            </div>
          </div>
      
      @endforeach
          

      <a href="{{route('technical-experience.create')}}" role="button">+Add Another Technical Experience</a>
              
          
           
         
      <div class="row mt-3">
        <div class="col text-left">
            <a class="btn btn-secondary" href=" {{route('experience.index')}} " role="button">Back</a>
        </div>

       
    
        <div class="col text-right">
          <?php $value = session('resume_selected_template', 'default') ?>
      
      @if ($value=="Resume Template 2")
      <a class=" btn btn-primary" href=" {{route('highlight.index')}} " role="button">Highlight</a> 
      @else
      <a class=" btn btn-primary" href=" {{route('additional-experience.index')}} " role="button">Additional Experience</a>
      @endif
         
        </div>
    </div>
     
       
     
         </div>
         
         
       </section>
 </main>


@endsection