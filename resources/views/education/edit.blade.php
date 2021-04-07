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
            
            <p>Education</p>
          </div>
        
          <form action="{{route('education.update', $education)}}" method='POST' class="form-horizontal">
            @csrf
            @method('PUT')
              <div class="form-group">
                <label for="education-schoolname">School Name<span class="alert-message">*</span></label>
                <input type="text" class="form-control {{ $errors->has('schoolname') ? 'is-invalid' : ''}}" id="education-schoolname" placeholder="School name" name="schoolname" value="{{$education->schoolname}}" required>
                 @error('schoolname')
                 <div class="invalid-feedback">
                 {{$errors->first('schoolname')}}
                </div>
                          @enderror
              </div>
              <div class="form-group">
                <label for="education-degree">Degree/Course<span class="alert-message">*</span></label>
                <input type="text" class="form-control {{ $errors->has('degree') ? 'is-invalid' : ''}}" id="education-degree" placeholder="Degree" name="degree" value="{{$education->degree}}" required>
                 @error('degree')
                 <div class="invalid-feedback">
                 {{$errors->first('degree')}}
                </div>
                          @enderror
              </div>
              <div class="form-group">
                <label for="education-fieldofstudy">Field Of Study<span class="alert-message">*</span></label>
                <input type="text" class="form-control {{ $errors->has('fieldofstudy') ? 'is-invalid' : ''}}" id="education-fieldofstudy" placeholder="Feild Of Study" name="fieldofstudy" value="{{$education->fieldofstudy}}" required>
                @error('fieldofstudy')
                <div class="invalid-feedback">
                {{$errors->first('fieldofstudy')}}
               </div>
                         @enderror
              </div>
              <div class="form-group">
                <label for="education-GPA">GPA</label>
                <input type="number" class="form-control" min="0"  max ="4" step="any" id="education-GPA" placeholder="GPA" name="gpa" value="{{$education->gpa}}">
                
              </div>
            <div class="form-row">
             <div class="col-md-6 mb-3">
               <label for="education-graduated">Graduated<span class="alert-message">*</span></label>
               <select class="form-control {{ $errors->has('graduated') ? 'is-invalid' : ''}}" id="education-graduated" name="graduated" required>
                <option value="">Please Select Option</option>
                <option {{ ($education->graduated) == 'still_enrolled' ? 'selected' : '' }} value="still_enrolled">Still Enrolled</option>
                <option {{ ($education->graduated) == 'yes' ? 'selected' : '' }} value="yes">Yes</option>
                <option {{ ($education->graduated) == 'no' ? 'selected' : '' }} value="no">No</option>
              </select>
              @error('graduated')
              <div class="invalid-feedback">
              {{$errors->first('graduated')}}
             </div>
                       @enderror
             </div>
            
             
             <div class="col-md-6 mb-3">
               <label for="education-enddate">End Date<span class="alert-message">*</span></label>
               <input type="text" class="form-control {{ $errors->has('enddate') ? 'is-invalid' : ''}}" id="education-enddate" placeholder="End Date" value="{{$education->enddate}}" name="enddate" onkeydown="return false" required >
               @error('enddate')
                <div class="invalid-feedback">
                {{$errors->first('enddate')}}
               </div>
                         @enderror
             </div>
             
           </div>
           <div class="form-row">
             <div class="col-md-4 mb-3">
               <label for="education-country">Country<span class="alert-message">*</span></label>
                         <input type="text" class="form-control {{ $errors->has('country') ? 'is-invalid' : ''}}" id="education-country" name="country" placeholder="Country" value="{{$education->country}}" required>
                         @error('country')
                         <div class="invalid-feedback">
                         {{$errors->first('country')}}
                        </div>
                                  @enderror
                        </div>
             <div class="col-md-4 mb-3">
                <label for="education-state">State/Province</label>
                          <input type="text" class="form-control" id="education-state" name="state" placeholder="State" value="{{$education->state}}" >
                          
                        </div>
             <div class="col-md-4 mb-3">
              <label for="education-city">City</label>
                         <input type="text" class="form-control" id="education-city" name="city" placeholder="City" value="{{$education->city}}" >
                         
                        </div>
             
           </div>


           
        <div class="field_wrapper_course">
         
          @if(count($education->relevant_courses)>0)
          <label for="experience-employer">Relevant Courses</label>
          @foreach ($education->relevant_courses as $key=>$value)


          <div class="form-row"><div class="form-group col-md-4"><input type="text" class="form-control" placeholder="Relevant course" name="relevant_courses[]" value="{{$value}}"/></div>
          <div class="form-group col-md-4">
            <a href="javascript:void(0);" class="btn btn-primary remove_course_button">Delete</a></div>
          </div>
      @endforeach
@else
  <p>No Relevant Courses Added</p>
@endif
          
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <a href="javascript:void(0);" role="button" class="add_course">+Add Relevant Courses</a>
          </div>
      </div>



      <div class="field_wrapper_awards">
        @if(count($education->awards)>0)
        <label for="experience-employer">Awards</label>
        @foreach ($education->awards as $key=>$value)


        <div class="form-row">
          <div class="form-group col-md-4">
            <input type="text" class="form-control" placeholder="Awards" name="awards[]" value="{{$value}}"/>
          </div>
        <div class="form-group col-md-4">
          <a href="javascript:void(0);" class="btn btn-primary remove_awards_button">Delete</a>
        </div>
      </div>
    @endforeach
    @else
  <p>No Awards added</p>
@endif
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <a href="javascript:void(0);" role="button" class="add_awards">+Add Awards</a>
        </div>
    </div>


    <div class="field_wrapper_curricular">
      @if(count($education->extra_activity)>0)
      <label for="experience-employer">Extra Curricular Activities</label>
      @foreach ($education->extra_activity as $key=>$value)


      <div class="form-row">
        <div class="form-group col-md-4">
          <input type="text" class="form-control" placeholder="Extra Curricular Activity" name="extra_activity[]" value="{{$value}}"/>
        </div>
        <div class="form-group col-md-4">
          <a href="javascript:void(0);" class="btn btn-primary remove_curricular_button">Delete</a>
        </div>
    </div>
  @endforeach
  @else
  <p>No Extra Curricular Activities added</p>
@endif
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <a href="javascript:void(0);" role="button" class="add_curricular">+Add Extra Curricular Activities</a>
      </div>
  </div>



           <x-form.btnsubmit name="Update Details"></x-form.btnsubmit>
          
         
         </form>
     
       
     
         </div>
       </section>
 </main>
 <script type="text/javascript">
   
   jQuery( window ).load(function() {
     if($('#education-graduated').val()=="still_enrolled")
     {
      jQuery('#education-enddate').datepicker('setEndDate', '+10y');
      jQuery('#education-enddate').datepicker('setStartDate', '+1d');
     }
   });







     jQuery("#education-enddate").datepicker( {
    format: "yyyy-mm",
    startView: "months", 
    minViewMode: "months",
    endDate: '+1d',
});

let education_start_date = '<?php echo $education->startdate;?>';

jQuery(function () {

var addCourseButton = $('.add_course'); //Add button selector
var course_wrapper = $('.field_wrapper_course'); //Input field wrapper
var field_course_HTML = '<div class="form-row"><div class="form-group col-md-4"><input type="text" class="form-control" placeholder="Relevant course" name="relevant_courses[]"/></div><div class="form-group col-md-4"><a href="javascript:void(0);" class="btn btn-primary remove_course_button">Delete</a></div></div>'; //New input field html 
var x=1;

//Once add button is clicked
$(addCourseButton).click(function(){
        x++; //Increment field counter
        $(course_wrapper).append(field_course_HTML); //Add field html
    
});

//Once remove button is clicked
$(course_wrapper).on('click', '.remove_course_button', function(e){
    e.preventDefault();
    $(this).parent().parent('div').remove(); //Remove field html
    x--; //Decrement field counter
});






var addAwardsButton = $('.add_awards'); //Add button selector
var awards_wrapper = $('.field_wrapper_awards'); //Input field wrapper
var field_awards_HTML = '<div class="form-row"><div class="form-group col-md-4"><input type="text" class="form-control" placeholder="Awards" name="awards[]"/></div><div class="form-group col-md-4"><a href="javascript:void(0);" class="btn btn-primary remove_awards_button">Delete</a></div></div>'; //New input field html 
var Y=1;

//Once add button is clicked
$(addAwardsButton).click(function(){
        Y++; //Increment field counter
        $(awards_wrapper).append(field_awards_HTML); //Add field html
    
});

//Once remove button is clicked
$(awards_wrapper).on('click', '.remove_awards_button', function(e){
    e.preventDefault();
    $(this).parent().parent('div').remove(); //Remove field html
    Y--; //Decrement field counter
});






var addCurricularButton = $('.add_curricular'); //Add button selector
var curricular_wrapper = $('.field_wrapper_curricular'); //Input field wrapper
var field_curricular_HTML = '<div class="form-row"><div class="form-group col-md-4"><input type="text" class="form-control" placeholder="Extra Curricular Activity" name="extra_activity[]"/></div><div class="form-group col-md-4"><a href="javascript:void(0);" class="btn btn-primary remove_curricular_button">Delete</a></div></div>'; //New input field html 
var Z=1;

//Once add button is clicked
$(addCurricularButton).click(function(){
        Z++; //Increment field counter
        $(curricular_wrapper).append(field_curricular_HTML); //Add field html
    
});

//Once remove button is clicked
$(curricular_wrapper).on('click', '.remove_curricular_button', function(e){
    e.preventDefault();
    $(this).parent().parent('div').remove(); //Remove field html
    Z--; //Decrement field counter
});






$('#education-graduated').change(function() {    
    var item=$(this);
    if(item.val()=='still_enrolled')
    {
      jQuery('#education-enddate').val('');
      jQuery('#education-enddate').datepicker('setEndDate', '+10y');
      jQuery('#education-enddate').datepicker('setStartDate', '+1d');
    }else{
      jQuery('#education-enddate').val('');
      jQuery('#education-enddate').datepicker('setEndDate', '+1d');
      jQuery('#education-enddate').datepicker('setStartDate', '-25y');
    }
});
        });

   

     </script>
@endsection
