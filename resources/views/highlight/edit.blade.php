@extends('layouts.app')

@section('content')
<main id="main">
    <section id="about" class="about">
         <div class="container" data-aos="fade-up">
          <x-form.nav></x-form.nav>
          <div class="section-title">
            <h2>Welcome to CV Builder</h2>
            
            <p>Highlights Of Qualification</p>
          </div>
        
          <form action="{{route('highlight.update', $highlight->id)}}" method='POST' class="form-horizontal" id="highlight-update">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="highlights-objective">Objective</label>
              <textarea class="form-control {{ $errors->has('objective') ? 'is-invalid' : ''}}" id="objective" rows="3" name="objective" required>{{$highlight->objective}}</textarea>
               @error('objective')
               <div class="invalid-feedback">
               {{$errors->first('objective')}}
              </div>
                        @enderror
            </div>




            <div class="field_wrapper_hard_skills">
              @if(count($highlight->hard_skills)>0)
                <label for="experience-employer">Hard Skills</label>
                @foreach ($highlight->hard_skills as $key=>$value)
      
      
                <div class="form-row">
                    
                    <div class="form-group col-md-8">
                  <input type="text" class="form-control hard_skill_text" placeholder="Hard Skills" name="hard_skills[]" value="{{$value}}"/>
  
                </div>
                <div class="form-group col-md-4">
                  <a href="javascript:void(0);" class="btn btn-primary remove_button">Delete</a>
                </div>
            </div>
            @endforeach
      @else
        <p>No Hard Skills Added</p>
      @endif
              <span id="highlights_hard_skill_error" class="alert-message"></span>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <a href="javascript:void(0);" role="button" class="add_hard_skills">+Add Hard Skills</a>
                <input type="hidden" id="hard_skill_count" value="{{count($highlight->hard_skills)}}">
              </div>
              
          </div>




          <div class="field_wrapper_soft_skills">
            @if(count($highlight->soft_skills)>0)
            <label for="experience-employer">soft Skills</label>
            @foreach ($highlight->soft_skills as $key=>$value)
  
  
            <div class="form-row">
                
                <div class="form-group col-md-8">
              
              <input type="text" class="form-control soft_skill_text" placeholder="Soft Skills" name="soft_skills[]" value="{{$value}}"/>
            </div>
            <div class="form-group col-md-4">
              <a href="javascript:void(0);" class="btn btn-primary remove_button_sk">Delete</a>
            </div>
        </div>
        @endforeach
  @else
    <p>No Hard Skills Added</p>
  @endif
            <span id="highlights_soft_skill_error" class="alert-message"></span>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
                <input type="hidden" id="soft_skill_count" value="{{count($highlight->soft_skills)}}">
              <a href="javascript:void(0);" role="button" class="add_soft_skills">+Add Soft Skills</a>
            </div>
            
        </div>





            <div class="form-group">
              <label for="highlights-communication_language">Communication Languages</label>
              <input type="text" class="form-control {{ $errors->has('communication_language') ? 'is-invalid' : ''}}" id="communication_language"  name="communication_language" required value="{{$highlight->communication_language}}">
               @error('communication_language')
               <div class="invalid-feedback">
               {{$errors->first('communication_language')}}
              </div>
                        @enderror
            </div>
            
          
            <x-form.btnsubmit name="Update Details"></x-form.btnsubmit>
         
         </form>
     
       
     
         </div>
       </section>
 </main>
 <script type="text/javascript">
  jQuery(function () {
  
  //hard skills
  var maxHardSkills = 2; //Input fields increment limitation
    var addHardSkillButton = $('.add_hard_skills'); //Add button selector
    var HradSkillwrapper = $('.field_wrapper_hard_skills'); //Input field wrapper
    var fieldHTMLHardSkills = '<div class="form-row"><div class="form-group col-md-8"><input type="text" class="form-control hard_skill_text" placeholder="Hard Skills" name="hard_skills[]"/></div><div class="form-group col-md-4"><a href="javascript:void(0);" class="btn btn-primary remove_button">Delete</a></div></div>'; //New input field html 
    var x = jQuery("#hard_skill_count").val(); //Initial field counter is 1
    
    //Once add button is clicked
    $(addHardSkillButton).click(function(){
        //Check maximum number of input fields
        if(x < maxHardSkills){ 
            x++; //Increment field counter
            $(HradSkillwrapper).append(fieldHTMLHardSkills); //Add field html
        }else{
          $(this).parent().parent('div').hide();
        }
    });
    
    //Once remove button is clicked
    $(HradSkillwrapper).on('click', '.remove_button', function(e){
      
        e.preventDefault();
        $(this).parent().parent('div').remove(); //Remove field html
        x--; //Decrement field counter
        if(x < maxHardSkills)
        {
          $('.add_hard_skills').parent().parent('div').show();
        }
    });
  
  
  //for soft skills
  var maxSoftSkills = 1; //Input fields increment limitation
    var addSoftSkillButton = $('.add_soft_skills'); //Add button selector
    var SoftSkillwrapper = $('.field_wrapper_soft_skills'); //Input field wrapper
    var fieldHTMLSoftSkills = '<div class="form-row"><div class="form-group col-md-8"><input type="text" class="form-control soft_skill_text" placeholder="Soft Skills" name="soft_skills[]"/></div><div class="form-group col-md-4"><a href="javascript:void(0);" class="btn btn-primary remove_button_sk">Delete</a></div></div>'; //New input field html 
    var y = jQuery("#soft_skill_count").val(); //Initial field counter is 1
    
    //Once add button is clicked
    $(addSoftSkillButton).click(function(){
        //Check maximum number of input fields
      
        if(y < maxSoftSkills){ 
          y++; //Increment field counter
            $(SoftSkillwrapper).append(fieldHTMLSoftSkills); //Add field html
        }else{
          $(this).parent().parent('div').hide();
        }
    });
    
    //Once remove button is clicked
    $(SoftSkillwrapper).on('click', '.remove_button_sk', function(e){
        e.preventDefault();
        
        $(this).parent().parent('div').remove(); //Remove field html
        y--; //Decrement field counter
        if(y < maxSoftSkills)
        {
          $('.add_soft_skills').parent().parent('div').show();
        }
        
    });
            });
  
            $("#highlight-update").submit(function(e){
  
      var hard_status = true;
      var soft_status = true;
      
      var hard_skills = document.getElementsByClassName('hard_skill_text');
      if(hard_skills.length < 2)
      {
        $('#highlights_hard_skill_error').text("Please provide atleast two hardskills");
        hard_status = false;
      }else{
        $('#highlights_hard_skill_error').text("");
        for (var j = 0; j < hard_skills.length; j++)
        {
          if( hard_skills[j].value =="")
          {
            hard_status = false;
            $('#highlights_hard_skill_error').text("Please enter value of hardskills");
          }else{
            hard_status = true;
            $('#highlights_hard_skill_error').text("");
          }
        }
          
      };
      //alert(items.length);
  
      var soft_skills = document.getElementsByClassName('soft_skill_text');
      if(soft_skills.length < 1)
      {
        $('#highlights_soft_skill_error').text("Please provide atleast one softskill");
        soft_status = false;
      }else{
        $('#highlights_soft_skill_error').text("");
        for (var i = 0; i < soft_skills.length; i++)
        {
          if(i==0 && soft_skills[i].value =="")
          {
            soft_status = false;
            $('#highlights_soft_skill_error').text("Please enter value of softskill");
          }else{
            soft_status = true;
            $('#highlights_soft_skill_error').text("");
          }
        }
          
      };
     // for (var i = 0; i < items.length; i++)
         // alert(items[i].name);
  
  if(soft_status && hard_status)
  {
    return true;
  }else{
    return false;
  }
      
    });
  
   </script>
@endsection
