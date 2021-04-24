<link href="{{asset('boottheme/assets/css/style.css')}}" rel="stylesheet">

@extends('layouts.admin')
@section('main-content')
<div id="upload_section">
<div class="container lst">
  
@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Sorry!</strong> Your input is valid.<br><br>
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
    </ul>
</div>
@endif
  
@if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div> 
@endif
  

<div class="section-title">
            <h2>Welcome to Templates</h2>
            
            <p>UPLOAD TEMPLATES </p>
          </div>
 
<form method="post" action="{{url('UploadTemplateFile')}}" enctype="multipart/form-data">
    @csrf
   

    <!-- <div class="hdtuto control-group lst input-group" 
    style="margin-top:10px; ; color:#3ac162;   font-size: 25px;">
    <label for="exampleInputEmail1">Template Name:</label></div>
    <div class="clone hide">
      <div class="hdtuto control-group lst input-group" style="margin-top:10px; margin-bottom:15px">
        <input type="text" name="filenames[]" class="myfrm form-control">
        
      </div>
    </div> -->
    <div class="hdtuto control-group lst input-group" 
    style="margin-top:10px; ; color:#343A40;   font-size: 25px;">
    <label for="exampleInputEmail1">Choose Template:</label></div>
    <div class="input-group hdtuto control-group lst increment" >
      <input type="file" name="filenames[]" class="myfrm form-control">
      
    </div>
    
  
    <button type="submit" class="btn btn-dark" style="margin-top:19px">Submit</button>
</form>        
</div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){ 
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
      });
      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".hdtuto").remove();
      });
    });
</script>
  @endsection
