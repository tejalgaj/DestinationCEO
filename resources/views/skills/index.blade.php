@extends('layouts.app')

@section('content')
<main id="main">
    <section id="about" class="about">
         <div class="container" data-aos="fade-up">
          <x-form.nav></x-form.nav>
          <div class="section-title">
            <h2>Welcome to CV Builder</h2>
            
            <p>Skills</p>
          </div>
        
          
          @foreach ($skills as $skill)
          <div class="card mt-3">
            <div class="card-header">
              {{$skill->skill_title}}
            </div>
            <div class="card-body">
              <h5 class="card-title">{{$skill->skill_title}}</h5>
              <p class="card-text">{{$skill->value}}</p>
              <a href="{{route('skills.edit',$skill)}}" class="btn btn-sm btn-dark" role="button">Edit</a>
              <form action={{route('skills.destroy',$skill)}} method="POST" class="mt-2" style="display: inline">
@csrf
@method('DELETE')
<input type="submit" value="Delete" class="btn btn-sm btn-danger">
            </form>
              
            </div>
          </div>
      
      @endforeach
          

      <a href="{{route('skills.create')}}" role="button">+Add Another Skills</a>
              
          
           
         
      <div class="row mt-3">
        <div class="col text-left">
            <a class="btn btn-secondary" href=" {{route('additional-experience.index')}} " role="button">Back</a>
        </div>
        <?php  $selected_template = session('resume_selected_template', 'default')?>
        
        @if ( $selected_template!="default")
        
          <div class="col text-right">
            <a class=" btn btn-dark skill_preview">Preview</a>
        </div>
        
        @endif
        
    </div>
     
       
     
         </div>
         
         
       </section>
 </main>

<script>
  $( ".skill_preview" ).on( "click", function() {
    $( ".preview-iframe" ).trigger( "click" );
});
  
  </script>
@endsection