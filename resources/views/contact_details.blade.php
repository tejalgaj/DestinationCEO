@extends('layouts.admin')
@section('main-content')
<!DOCTYPE html>
<html>
<link href="{{asset('boottheme/assets/css/style.css')}}" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    .container-form{
        margin: 100px;
    margin-top: 100px;
    
    }
</style>
<body>
<div class="container-form">
<div class="section-title">
            <h2>Welcome to Address details</h2>
            
            <p>Admin Address Details </p>
          </div>
       <table class="table table-striped">
         
@if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div> 
@endif
          <tbody>
             <tr>
                
                <td colspan="1">
                   <form class="well form-horizontal" action="/update/100" method="POST">
                      @csrf
                      
                      <fieldset>
                        
                         <div class="form-group">
                            <label class="col-md-4 control-label">Address</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="addressLine" name="addressLine" placeholder="Address Line " class="form-control" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">City</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="city" name="city" placeholder="City" required="true" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">State/Province/Region</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="state" name="state" placeholder="State/Province/Region" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Postal Code/ZIP</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="postcode" name="postcode" placeholder="Postal Code/ZIP" class="form-control"  value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Country</label>
                            
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="Country" name="Country" placeholder="Country" class="form-control" required="true" value="" type="text"></div>
                            </div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="email" placeholder="Email" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Phone Number</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                      </fieldset>
                          
<button type="submit" class="btn btn-secondary">Save details</button>
                   </form>
                </td>
             </tr>
          </tbody>
       </table>
   
    </div>
  

  <script>
    window.onload=populateDetails;
    function populateDetails()
    {

    @foreach($admin_address_details as $admin_address_detail)
    {
        
    document.getElementById('addressLine').value='{{$admin_address_detail['address']}}';
    
    document.getElementById('city').value='{{$admin_address_detail['city']}}';
    
    document.getElementById('Country').value='{{$admin_address_detail['country']}}';
    
    document.getElementById('email').value='{{$admin_address_detail['email']}}';
    
    document.getElementById('state').value='{{$admin_address_detail['province']}}';
    
    document.getElementById('postcode').value='{{$admin_address_detail['postcode']}}';
    
    document.getElementById('phoneNumber').value='{{$admin_address_detail['phone']}}';

    }
    @endforeach
    
    }
      </script>
      </body>
      </html>
      @endsection