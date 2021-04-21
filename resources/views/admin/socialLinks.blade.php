@extends('layouts.admin')
@section('main-content')
<!DOCTYPE html>
<html>
<link href="{{asset('boottheme/assets/css/style.css')}}" rel="stylesheet">
<link href="{{asset('boottheme/assets/css/resumescancss.css')}}" rel="stylesheet">
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
            <h2>Welcome to Social Widgets</h2>
            
            <p>SOCIAL WIDGETS </p>
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
                   <form class="well form-horizontal" action="/updateSociallinks/1" method="POST">
                      @csrf
                     
                      <fieldset>
                        
                         <div class="form-group">
                            <label class="col-md-4 control-label">Twitter</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="bx bxl-twitter"></i></span><input id="twitter" name="twitter" placeholder="Twitter " required="true" class="form-control" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Facebook</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="bx bxl-facebook"></i></span><input id="facebook" name="facebook" placeholder="Facebook" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Instagram</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="bx bxl-instagram"></i></span><input id="instagram" name="instagram" placeholder="Instagram" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Google</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="bx bxl-google"></i></span><input id="google" name="google" placeholder="Google" class="form-control"  required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">LinkedIn</label>
                            
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="bx bxl-linkedin"></i></span><input id="linkedIn" name="linkedIn" placeholder="LinkedIn" class="form-control" required="true" value="" type="text"></div>
                            </div>
                            </div>
                         </div>
                         
                      </fieldset>
                      </br>
                      <button id="submitbtn"  type="submit"  >Save Details</button>
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

    @foreach($admin_social_links_files as $adminSocialLinksFile)
    {
        
    document.getElementById('twitter').value='{{$adminSocialLinksFile['twitter']}}';
    
    document.getElementById('facebook').value='{{$adminSocialLinksFile['facebook']}}';
    
    document.getElementById('instagram').value='{{$adminSocialLinksFile['instagram']}}';
    
    document.getElementById('google').value='{{$adminSocialLinksFile['google']}}';
    
    document.getElementById('linkedIn').value='{{$adminSocialLinksFile['linkedIn']}}';

    }
    @endforeach
    
    }
      </script>
      
      </body>
      </html>
      @endsection
