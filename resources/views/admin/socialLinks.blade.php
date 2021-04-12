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
<h2>Update Social widgets</h2></br>

       <table class="table table-striped">
          <tbody>
             <tr>
                
                <td colspan="1">
                   <form class="well form-horizontal" action="/update/100" method="POST">
                      @csrf
                     
                      <fieldset>
                        
                         <div class="form-group">
                            <label class="col-md-4 control-label">Twitter</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="bx bxl-twitter"></i></span><input id="addressLine" name="addressLine" placeholder="Twitter " required="true" class="form-control" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Facebook</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="bx bxl-facebook"></i></span><input id="city" name="city" placeholder="Facebook" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Instagram</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="bx bxl-instagram"></i></span><input id="state" name="state" placeholder="Instagram" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Google</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="bx bxl-google"></i></span><input id="postcode" name="postcode" placeholder="Google" class="form-control"  required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">LinkedIn</label>
                            
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="bx bxl-linkedin"></i></span><input id="Country" name="Country" placeholder="LinkedIn" class="form-control" required="true" value="" type="text"></div>
                            </div>
                            </div>
                         </div>
                         
                      </fieldset>
                          
<button type="submit" class="btn btn-secondary">Update Links</button>
                   </form>
                </td>
             </tr>
          </tbody>
       </table>
   
    </div>
  

      
      </body>
      </html>
      @endsection
