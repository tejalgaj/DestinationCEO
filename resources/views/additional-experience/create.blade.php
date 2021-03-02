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
        
          <form action="/additional-experience" method='POST' class="form-horizontal">
            @csrf
          
              <div class="form-group">
                <label for="additional-experience-role">Role</label>
                <input type="text" class="form-control" id="additional-experience-role" placeholder="Role" name="role" value="{{old('role')}}" required>
                 
              </div>
             
              
              <x-form.input name="responsibilities" value="{{old('responsibilities')}}" module="additional-experience"></x-form.input>
            
          
              <x-form.btnsubmit name="Save Details"></x-form.btnsubmit>
              <a class="btn btn-secondary" href=" {{route('skills.index')}} " role="button">Skip</a>
              
         </form>
         
       
     
         </div>
       </section>
 </main>
 
@endsection
