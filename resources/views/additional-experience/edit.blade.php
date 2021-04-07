@extends('layouts.app')

@push('datepicker-styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endpush

@push('datepicker-js')
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
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
            
            <p>Additional Experience</p>
          </div>
       
          <form action="{{route('additional-experience.update', $additionalExperience->id)}}" method='POST' class="form-horizontal">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="additional-experience-role">Role<span class="alert-message">*</span></label>
              <input type="text" class="form-control {{ $errors->has('role') ? 'is-invalid' : ''}}" id="additional-experience-role" placeholder="Role" name="role" value="{{$additionalExperience->role}}" required>
              @error('role')
               <div class="invalid-feedback">
               {{$errors->first('role')}}
              </div>
                        @enderror
            </div>

            <div class="form-group">
              <label for="additional-experience-employer">Employer<span class="alert-message">*</span></label>
              <input type="text" class="form-control {{ $errors->has('employer') ? 'is-invalid' : ''}}" id="additional-experience-employer" placeholder="employer" name="employer" value="{{$additionalExperience->employer}}" required>
               @error('employer')
               <div class="invalid-feedback">
               {{$errors->first('employer')}}
              </div>
                        @enderror
            </div>
            <div class="form-group">
              <label for="additional-experience-work-responsibilities">Work Resposibilities</label>
              <textarea class="ckeditor form-control" name="responsibilities">{{$additionalExperience->responsibilities}}</textarea>
          </div>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="additional-experience-startdate">Start Date<span class="alert-message">*</span></label>
              <input type="text"  class="form-control {{ $errors->has('startdate') ? 'is-invalid' : ''}}" id="additional-experience-startdate" placeholder="Start Date" name="startdate" value="{{$additionalExperience->startdate}}" onkeydown="return false"  required>
               @error('startdate')
               <div class="invalid-feedback">
               {{$errors->first('startdate')}}
              </div>
                        @enderror
              
            </div>
            <div class="col-md-6 mb-3 exp-end-date">
              <label for="additional-experience-enddate">End Date</label>
              <input type="text" class="form-control {{ $errors->has('enddate') ? 'is-invalid' : ''}}" id="additional-experience-enddate" placeholder="End Date" name="enddate" value="{{$additionalExperience->enddate}}" onkeydown="return false" required>
              @error('enddate')
               <div class="invalid-feedback">
               {{$errors->first('enddate')}}
              </div>
                        @enderror
            </div>
            
          </div>

          <div class="form-check">
           <input
             class="form-check-input"
             type="checkbox"
             value="yes"
             name="currently_working"
             id="currently_working"
             {{ ($additionalExperience->currently_working=='yes') ? ' checked' : '' }}
           />
           <label class="additional-experience-working" for="currently_working">
             I currently work here
           </label>
         </div>



          <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="additional-experience-country">Country<span class="alert-message">*</span></label>
                        <input type="text" class="form-control {{ $errors->has('country') ? 'is-invalid' : ''}}" id="additional-experience-country" name="country" placeholder="Country" value="{{$additionalExperience->country}}" required>
                        @error('country')
                        <div class="invalid-feedback">
                        {{$errors->first('country')}}
                       </div>
                                 @enderror
                      </div>
            <div class="col-md-4 mb-3">
               <label for="additional-experience-state">State/Province</label>
                         <input type="text" class="form-control" id="additional-experience-state" name="state" placeholder="State" value="{{$additionalExperience->state}}">
             </div>
            <div class="col-md-4 mb-3">
             <label for="additional-experience-city">City</label>
                        <input type="text" class="form-control" id="additional-experience-city" name="city" placeholder="City" value="{{$additionalExperience->city}}">
            </div>
            
          </div>
            
          
            <x-form.btnsubmit name="Update Details"></x-form.btnsubmit>

           
         
         </form>
     
       
     
         </div>
       </section>
 </main>
 <script type="text/javascript">
  $(document).ready(function () {
 CKEDITOR.replace( 'responsibilities' );
   });
    jQuery("#additional-experience-startdate").datepicker( {
   format: "yyyy-mm",
   startView: "months", 
   minViewMode: "months",
   endDate: '+1d',
}).on('changeDate', function(){
   // set the "toDate" start to not be later than "fromDate" ends:
   var endDate = new Date(jQuery(this).val());
   endDate.setDate(endDate.getDate() + 30);
   //var newDate = new Date(jQuery(this).val() );
   
   jQuery('#additional-experience-enddate').datepicker('setStartDate', endDate);
});


jQuery("#additional-experience-enddate").datepicker( {
   format: "yyyy-mm",
   startView: "months", 
   minViewMode: "months",
   endDate: '+1d',
}).on('changeDate', function(){
   // set the "fromDate" end to not be later than "toDate" starts:
   jQuery('#additional-experience-startdate').datepicker('setEndDate', new Date(jQuery(this).val()));
});
jQuery( window ).load(function() {
 // Run code
 if(jQuery("#currently_working").is(':checked'))
 {
   jQuery('#additional-experience-enddate').attr('required', false);
                     jQuery(".exp-end-date").hide();
 }
});

jQuery(function () {
 jQuery("#currently_working").click(function () {
                   if (jQuery(this).is(":checked")) {
                     
                     jQuery('#additional-experience-enddate').attr('required', false);
                     jQuery(".exp-end-date").hide();
                   } else {
                     jQuery('#additional-experience-enddate').attr('required', true);
                     jQuery(".exp-end-date").show();
                   }
               });

           });


    </script>
@endsection
