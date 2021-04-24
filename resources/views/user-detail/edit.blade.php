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
            
            <p>Contact Information</p>
          </div>
        
          <form action="{{route('user-detail.update', $userDetail->id)}}" method='POST' class="form-horizontal" id="user-detail-update">
            @csrf
            @method('PUT')
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="user-detail-fname">First name<span class="alert-message">*</span></label>
                <input type="text" class="form-control {{ $errors->has('firstname') ? 'is-invalid' : ''}}" id="user-detail-fname" placeholder="First name" name="firstname" value="{{$userDetail->firstname}}" required>
                 @error('firstname')
                 <div class="invalid-feedback">
                 {{$errors->first('firstname')}}
                </div>
                          @enderror
                
              </div>
              <div class="col-md-6 mb-3">
                <label for="user-detail-lname">Last name<span class="alert-message">*</span></label>
                <input type="text" class="form-control {{ $errors->has('lastname') ? 'is-invalid' : ''}}" id="user-detail-lname" placeholder="Last name" name="lastname" value="{{$userDetail->lastname}}" required>
                @error('lastname')
                 <div class="invalid-feedback">
                 {{$errors->first('lastname')}}
                </div>
                          @enderror
              </div>
              
            </div>
            <div class="form-group">
                          <label for="user-detail-email">Email address<span class="alert-message">*</span></label>
                          <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" id="user-detail-email" aria-describedby="emailHelp" name="email" placeholder="Enter email" value="{{$userDetail->email}}" required>
                          @error('email')
                          <div class="invalid-feedback">
                          {{$errors->first('email')}}
                         </div>
                                   @enderror
                        </div>
                        <div class="form-group">
                          <label for="user-detail-phone">Phone<span class="alert-message">*</span></label>
                          <input type="text" class="form-control {{ $errors->has('phone') ? 'is-invalid' : ''}}" id="user-detail-phone" name="phone" placeholder="Phone" value="{{$userDetail->phone}}" required>
                          @error('phone')
                          <div class="invalid-feedback">
                          {{$errors->first('phone')}}
                         </div>
                                   @enderror
                          <span id="user_detail_phone_error" class="alert-message"></span>
                        </div>
                        <div class="form-group">
                          <label for="user-detail-address">Address<span class="alert-message">*</span></label>
                          <input type="text" class="form-control {{ $errors->has('address') ? 'is-invalid' : ''}}" id="user-detail-address" name="address" placeholder="Address" value="{{$userDetail->address}}" required>
                          @error('address')
                          <div class="invalid-feedback">
                          {{$errors->first('address')}}
                         </div>
                                   @enderror
                        </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="user-detail-country">Country<span class="alert-message">*</span></label>
                          <input type="text" class="form-control {{ $errors->has('country') ? 'is-invalid' : ''}}" id="user-detail-country" name="country" placeholder="Country" value="{{$userDetail->country}}" required> 

                          @error('country')
                          <div class="invalid-feedback">
                          {{$errors->first('country')}}
                         </div>
                                   @enderror
              </div>
              <div class="col-md-6 mb-3">
               <label for="user-detail-city">City<span class="alert-message">*</span></label>
                          <input type="text" class="form-control {{ $errors->has('city') ? 'is-invalid' : ''}}" id="user-detail-city" name="city" placeholder="City" value="{{$userDetail->city}}" required>
                          @error('city')
                          <div class="invalid-feedback">
                          {{$errors->first('city')}}
                         </div>
                                   @enderror
                        </div>
              
            </div>
          
             <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="user-detail-state">State/Province<span class="alert-message">*</span></label>
                          <input type="text" class="form-control {{ $errors->has('state') ? 'is-invalid' : ''}}" id="user-detail-state" name="state" placeholder="State" value="{{$userDetail->state}}" required>
                          @error('state')
                          <div class="invalid-feedback">
                          {{$errors->first('state')}}
                         </div>
                                   @enderror
                        </div>
              <div class="col-md-6 mb-3">
               <label for="user-detail-zipcode">Zipcode<span class="alert-message">*</span></label>
                          <input type="text" class="form-control {{ $errors->has('zipcode') ? 'is-invalid' : ''}}" id="user-detail-zipcode" name="zipcode" placeholder="Zipcode" value="{{$userDetail->zipcode}}" required>
                          @error('zipcode')
                          <div class="invalid-feedback">
                          {{$errors->first('zipcode')}}
                         </div>
                                   @enderror
                        </div>
              
            </div>

            
            <div class="form-group">
             <label for="user-detail-credibleintro">Credible Introduction<span class="alert-message">*</span></label>
             <textarea class="form-control {{ $errors->has('credibleintro') ? 'is-invalid' : ''}}" id="credibleintro" rows="3" name="credibleintro" required>{{$userDetail->credibleintro}}</textarea>
             @error('credibleintro')
                          <div class="invalid-feedback">
                          {{$errors->first('credibleintro')}}
                         </div>
                                   @enderror
           </div>
           
           <div class="form-row">
             <div class="col-md-6 mb-3">
               <label for="user-detail-linkedin">LinkedIn</label>
                         <input type="text" class="form-control" id="user-detail-linkedin" name="linkedin" placeholder="linkedin" value="{{$userDetail->linkedin}}">
                         <span id="user_detail_linkedin_error" class="alert-message"></span>
                        </div>
             <div class="col-md-6 mb-3">
              <label for="user-detail-guthub">Github</label>
                         <input type="text" class="form-control" id="user-detail-guthub" name="github" placeholder="github" value="{{$userDetail->github}}">
             </div>
             
           </div>
          
           <x-form.btnsubmit class="btn btn-dark" name="Update Details"></x-form.btnsubmit>
         
         </form>
     
       
     
         </div>
       </section>
 </main>
 
     <script type="text/javascript">
     $("#user-detail-update").submit(function(e){
    var linkedin_status = true;
    var phone_status = true;
    var linkedinURL = $('#user-detail-linkedin').val();
    if(linkedinURL!="")
    {
      $('#user_detail_linkedin_error').text("");
      if( /(ftp|http|https):\/\/?(?:www\.)?linkedin.com(\w+:{0,1}\w*@)?(\S+)(:([0-9])+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/.test(linkedinURL) ) {


}else{
$('#user_detail_linkedin_error').text("Please provide Valid Linkedin URL");
linkedin_status = false;


}
    }
    var phone = $('#user-detail-phone').val();
    if(phone!="")
    {
      $('#user_detail_phone_error').text("");
      var filter = /^[0-9-+]+$/;
      if( filter.test(phone) ) {


}else{
$('#user_detail_phone_error').text("Please provide Valid Phone");
phone_status = false;


}
    }
  
if(phone_status && linkedin_status)
{
  return true;
}else{
  return false;
}
   // return status;
  });
     </script>
@endsection
