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
              <label for="skills-name">Skill Title<span class="alert-message">*</span></label>
              <input type="text" class="form-control {{ $errors->has('skill_title') ? 'is-invalid' : ''}}" id="skills-title" placeholder="Skill Title" name="skill_title" value="{{$skill->skill_title}}" required>
               @error('skill_title')
               <div class="invalid-feedback">
               {{$errors->first('skill_title')}}
              </div>
                        @enderror
            </div>

            <div class="form-group">
              <label for="skills-name">Skill Value<span class="alert-message">*</span></label>
              <input type="text" class="form-control {{ $errors->has('value') ? 'is-invalid' : ''}}" id="skills-value" placeholder="Skill Value" name="value" value="{{$skill->value}}" required>
               @error('value')
               <div class="invalid-feedback">
               {{$errors->first('value')}}
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
