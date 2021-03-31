@extends('layouts.app')

@section('content')
<main id="main">
    <section id="about" class="about">
         <div class="container" data-aos="fade-up">
          <x-form.nav></x-form.nav> 
          <div class="section-title">
            <h2>Welcome to CV Builder</h2>
            
            <p>Education summary</p>
          </div>
        
          
          @foreach ($education as $edu)
          <div class="card mt-3">
            <div class="card-header">
              {{$edu->degree}}
            </div>
            <div class="card-body">
              <h5 class="card-title">{{$edu->schoolname}}</h5>
              <p class="card-text">{{$edu->fieldofstudy}}</p>
              <a href="{{route('education.edit',$edu)}}" class="btn btn-sm btn-primary" role="button">Edit</a>
              <form action={{route('education.destroy',$edu)}} method="POST" class="mt-2" style="display: inline">
@csrf
@method('DELETE')
<input type="submit" value="Delete" class="btn btn-sm btn-danger">
            </form>
              
            </div>
          </div>
      
      @endforeach
          

      <a href="{{route('education.create')}}" role="button">+Add Another Education</a>

      
      <div class="row mt-3">
        <div class="col text-left">
            <a class="btn btn-secondary " href=" {{route('user-detail.index')}} " role="button">Back</a>
        </div>
    
        <div class="col text-right">
            <a class=" btn btn-primary {{ ($edu_status_count < 1)?'disabled':''}}" href=" {{route('experience.index')}} " role="button">Work History</a> 
        </div>
    </div>
      
              
          
           
         
        
     
       
     
         </div>
        
       </section>
 </main>


@endsection