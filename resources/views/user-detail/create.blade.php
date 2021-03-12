@extends('layouts.app')

@section('content')
<main id="main">

    <section id="about" class="about">
         <div class="container" data-aos="fade-up">
          <x-form.nav></x-form.nav> 
          <div class="section-title">
            <h2>Welcome to CV Builder</h2>
            
            <p>What's your contact information?</p>
          </div>
        
          <form action="/user-detail" method='POST' class="form-horizontal" id="user-detail-insert">
            @csrf
            <div class="form-row">
             <div class="col-md-6 mb-3">
               <label for="user-detail-fname">First name</label>
               <input type="text" class="form-control {{ $errors->has('firstname') ? 'is-invalid' : ''}}" id="user-detail-fname" placeholder="First name" name="firstname" value="{{old('firstname')}}" required>
                @error('firstname')
                <div class="invalid-feedback">
                {{$errors->first('firstname')}}
               </div>
                         @enderror
               
             </div>
             <div class="col-md-6 mb-3">
               <label for="user-detail-lname">Last name</label>
               <input type="text" class="form-control {{ $errors->has('lastname') ? 'is-invalid' : ''}}" id="user-detail-lname" placeholder="Last name" name="lastname" value="{{old('lastname')}}" required>
               @error('lastname')
                <div class="invalid-feedback">
                {{$errors->first('lastname')}}
               </div>
                         @enderror
             </div>
             
           </div>
           <div class="form-group">
                         <label for="user-detail-email">Email address</label>
                         <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" id="user-detail-email" aria-describedby="emailHelp" name="email" placeholder="Enter email" value="{{old('email')}}">
                         @error('email')
                         <div class="invalid-feedback">
                         {{$errors->first('email')}}
                        </div>
                                  @enderror
                       </div>
                       <div class="form-group">
                         <label for="user-detail-phone">Phone</label>
                         <input type="text" class="form-control" id="user-detail-phone" name="phone" placeholder="Phone" value="{{old('phone')}}">
                       </div>
                       <div class="form-group">
                         <label for="user-detail-address">Address</label>
                         <input type="text" class="form-control" id="user-detail-address" name="address" placeholder="Address" value="{{old('address')}}">
                       </div>
           <div class="form-row">
             <div class="col-md-6 mb-3">
               <label for="user-detail-country">Country</label>
                         <input type="text" class="form-control" id="user-detail-country" name="country" placeholder="Country" value={{old('country')}}>
             </div>
             <div class="col-md-6 mb-3">
              <label for="user-detail-city">City</label>
                         <input type="text" class="form-control" id="user-detail-city" name="city" placeholder="City" value={{old('city')}}>
             </div>
             
           </div>
         
            <div class="form-row">
             <div class="col-md-6 mb-3">
               <label for="user-detail-state">State/Province</label>
                         <input type="text" class="form-control" id="user-detail-state" name="state" placeholder="State" value={{old('state')}}>
             </div>
             <div class="col-md-6 mb-3">
              <label for="user-detail-zipcode">Zipcode</label>
                         <input type="text" class="form-control" id="user-detail-zipcode" name="zipcode" placeholder="Zipcode" value={{old('zipcode')}}>
             </div>
             
           </div>
           <div class="form-group">
            <label for="user-detail-credibleintro">Credible Introduction</label>
            <textarea class="form-control {{ $errors->has('credibleintro') ? 'is-invalid' : ''}}" id="credibleintro" rows="3" name="credibleintro" required>{{old('credibleintro')}}</textarea>
            @error('credibleintro')
            <div class="invalid-feedback">
            {{$errors->first('credibleintro')}}
           </div>
                     @enderror
          </div>
          
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="user-detail-linkedin">LinkedIn</label>
                        <input type="text" class="form-control" id="user-detail-linkedin" name="linkedin" placeholder="linkedin" value="{{old('linkedin')}}">
                        <span id="user_detail_linkedin_error" class="alert-message"></span>
                      </div>
            <div class="col-md-6 mb-3">
             <label for="user-detail-guthub">Github</label>
                        <input type="text" class="form-control" id="user-detail-guthub" name="guthub" placeholder="guthub" value="{{old('guthub')}}">
            </div>
            
          </div>
          <x-form.btnsubmit name="Save Details"></x-form.btnsubmit>
         
         </form>
     
       
     
         </div>
       </section>
 </main>
 <script type="text/javascript">
  $("#user-detail-insert").submit(function(e){
    var status = true;
    var linkedinURL = $('#user-detail-linkedin').val();
    if(linkedinURL!="")
    {
      $('#user_detail_linkedin_error').text("");
      if( /(ftp|http|https):\/\/?(?:www\.)?linkedin.com(\w+:{0,1}\w*@)?(\S+)(:([0-9])+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/.test(linkedinURL) ) {


}else{
$('#user_detail_linkedin_error').text("Please provide Valid Linkedin URL");
status = false;


}
    }
    return status;
  });
 </script>
@endsection
