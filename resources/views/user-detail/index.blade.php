@extends('layouts.app')

@section('content')
<main id="main">
    <section id="about" class="about">
         <div class="container" data-aos="fade-up">
          <x-form.nav></x-form.nav>
          <div class="section-title">
            <h2>Welcome to CV Builder</h2>
            
            <p>User Detail summary</p>
          </div>
        
          
          {{-- {{$value = session('resume_selected_template', 'default')}} --}}
          
          <div class="card mt-3">
            <div class="card-header">
              {{$userdetail->firstname." ".$userdetail->lastname}}
            </div>
            <div class="card-body">
              <h5 class="card-title">{{$userdetail->email}}</h5>
              <p class="card-text">{{$userdetail->city.' '.$userdetail->state.' '.$userdetail->country}}</p>
              <a href="{{route('user-detail.edit',$userdetail)}}" class="btn btn-sm btn-primary" role="button">Edit</a>
              
              
            </div>
          </div>
      
     
          

      


      
              
          
           
         
      <div class="row mt-3">
       
    
        <div class="col text-right">
            <a class=" btn btn-primary" href=" {{route('education.index')}} " role="button">Next Section</a>
        </div>
    </div>
     
       
     
         </div>
        
       </section>
 </main>


@endsection