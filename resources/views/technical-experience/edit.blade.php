@extends('layouts.app')

@push('datepicker-styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endpush

@push('datepicker-js')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
@endpush



@section('content')
<main id="main">
    <section id="about" class="about">
         <div class="container" data-aos="fade-up">
          <x-form.nav></x-form.nav>
          <div class="section-title">
            <h2>Welcome to CV Builder</h2>
            
            <p>Technical Experience</p>
          </div>
       
          <form id="technical-experience-edit" class="form-horizontal">
            @csrf
            @method('PUT')
            <input type="hidden" name="te_id" id="te_id" value="{{$technicalExperience->id}}" >
            <div class="form-row">
              <div class="col-md-8 mb-3">
              <label for="technical-experience-project-title">Project Title</label>
              <input type="text" class="form-control" id="technical-experience-project-title" placeholder="Project Title" name="project_title" value="{{$technicalExperience->project_title}}" required>
              <span id="project_title_error" class="alert-message"></span> 
            </div>
             
              <div class="col-md-4 mb-3">
                <label for="technical-experience-project-year">Project Year</label>
                <input type="text" class="form-control" id="technical-experience-project-year" placeholder="Project Year" name="project_year" value="{{$technicalExperience->project_year}}">
                </div>
            </div>
           
            <div class="form-group">
              <label for="technical-experience-project-description">Project Description</label>
              <textarea class="form-control {{ $errors->has('project_description') ? 'is-invalid' : ''}}" id="technical-experience-project-description" rows="3" name="project_description" required>{{$technicalExperience->project_description}}</textarea>
              <span id="project_description_error" class="alert-message"></span>
            </div>
            
            <div class="form-group">
              <label for="technical-experience-technology-stack">Technology Stack</label>
              <input type="text" class="form-control {{ $errors->has('technology_stack') ? 'is-invalid' : ''}}" id="technical-experience-technology-stack" placeholder="Technology Stack (Sperate with , )" name="technology_stack" value="{{$technicalExperience->technology_stack}}" required>
              <span id="project_technology_stack_error" class="alert-message"></span>
            </div>
            
          
            <x-form.btnsubmit name="Update Details"></x-form.btnsubmit>

           
         
         </form>
     
       
     
         </div>
       </section>
 </main>
 <script type="text/javascript">
  jQuery("#technical-experience-project-year").datepicker( {
      format: "yyyy",
      startView: "years", 
      minViewMode: "years",
      endDate: '+1d',
  })
  
  
  
  
  $("#technical-experience-edit").submit(function(e){
    e.preventDefault();
    var project_title = $('#technical-experience-project-title').val();
      var project_description = $('#technical-experience-project-description').val();
      var project_year = $('#technical-experience-project-year').val();
      var technology_stack = $('#technical-experience-technology-stack').val();
      var id = $('#te_id').val();
      alert(id);
      let _url     = '/technical-experience.update';
      let _token   = $('meta[name="csrf-token"]').attr('content');
  
        $.ajax({
          url: "{{route('technical-experience.update',"id")}}",
          type: "PUT",
          data: {
            id: id,
            project_title: project_title,
            project_description: project_description,
            project_year: project_year,
            technology_stack: technology_stack,
            _token: _token
          },
          success: function(response) {
              if(response.code == 200) {
                window.location = "/technical-experience";
               //alert(response.message);
              }
          },
          error: function(response) {
            console.log(response.responseJSON);
            if(response.responseJSON.errors.project_title)
            {
              $('#project_title_error').text(response.responseJSON.errors.project_title);
            }else{
              $('#project_title_error').text('');
            }
  
            if(response.responseJSON.errors.project_description)
            {
              $('#project_description_error').text(response.responseJSON.errors.project_description);
            }else{
              $('#project_description_error').text('');
            }
  
            if(response.responseJSON.errors.technology_stack)
            {
              $('#project_technology_stack_error').text(response.responseJSON.errors.technology_stack);
            }else{
              $('#project_technology_stack_errort_title_error').text('');
            }
            
           
            
           
          }
        });
  })
   </script>
@endsection
