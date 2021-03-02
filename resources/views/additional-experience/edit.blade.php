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
       
          <form action="{{route('additional-experience.update', $additionalExperience->id)}}" method='POST' class="form-horizontal">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="additional-experience-role">Role</label>
              <input type="text" class="form-control" id="additional-experience-role" placeholder="Role" name="role" value="{{$additionalExperience->role}}" required>
              
            </div>
            <x-form.input name="responsibilities" value="{{$additionalExperience->responsibilities}}" module="additional-experience"></x-form.input>
            
          
            <x-form.btnsubmit name="Update Details"></x-form.btnsubmit>

           
         
         </form>
     
       
     
         </div>
       </section>
 </main>

@endsection
