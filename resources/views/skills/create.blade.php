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
        
          <form action="/skills" method='POST' class="form-horizontal">
            @csrf
          
              <div class="form-group">
                <label for="skills-name">Skill Title</label>
                <input type="text" class="form-control {{ $errors->has('skill_title') ? 'is-invalid' : ''}}" id="skills-title" placeholder="Skill Title" name="skill_title" value="{{old('skill_title')}}" required>
                 @error('skill_title')
                 <div class="invalid-feedback">
                 {{$errors->first('skill_title')}}
                </div>
                          @enderror
              </div>

              <div class="form-group">
                <label for="skills-name">Skill Value</label>
                <input type="text" class="form-control {{ $errors->has('value') ? 'is-invalid' : ''}}" id="skills-value" placeholder="Skill Value" name="value" value="{{old('value')}}" required>
                 @error('value')
                 <div class="invalid-feedback">
                 {{$errors->first('value')}}
                </div>
                          @enderror
              </div>
             
              
              <x-form.input name="description" value="{{old('description')}}" module="skills"></x-form.input>
            
          
              <x-form.btnsubmit name="Save Details"></x-form.btnsubmit>
         
         </form>
     
       
     
         </div>
       </section>
 </main>
 
@endsection
