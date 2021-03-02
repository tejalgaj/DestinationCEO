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
        
          <form action="{{route('skills.update', $skill->id)}}" method='POST' class="form-horizontal">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="skills-name">Skill Name</label>
              <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" id="skills-name" placeholder="Skill Name" name="name" value="{{$skill->name}}" required>
               @error('name')
               <div class="invalid-feedback">
               {{$errors->first('name')}}
              </div>
                        @enderror
            </div>
            <x-form.input name="description" value="{{$skill->description}}" module="skills"></x-form.input>
            
          
            <x-form.btnsubmit name="Update Details"></x-form.btnsubmit>
         
         </form>
     
       
     
         </div>
       </section>
 </main>

@endsection
