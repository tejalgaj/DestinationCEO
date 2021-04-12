<link href="{{asset('boottheme/assets/css/style.css')}}" rel="stylesheet">
@push('datepicker-js')
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
@endpush

@extends('layouts.admin')
@section('main-content')
<main id="main">
    <section id="about" class="about">
         <div class="container" data-aos="fade-up">
        
        <h3 class="well">About Destination CEO</h3>
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
  <style>
  .form-control{
    width: 100%;

  }
  .cke_chrome {
    visibility: inherit;
    width: 100%;
}
</style>

 
<form method="post" action="{{url('adminAboutUsFile')}}" enctype="multipart/form-data">
    @csrf
     <div class="hdtuto control-group lst input-group" 
    style="margin-top:10px; ; color:#3ac162;   font-size: 25px;">
    <label for="exampleInputEmail1"></label></div>
    <div class="input-group hdtuto control-group lst increment" >
    
    
<!-- <textarea id="myfrm form-control" name="about"  rows="10" cols="120"> -->
<textarea class="ckeditor form-control" name="about" style= "max-width: 100%;">
      {{$about['about']}}
       </textarea>
      </div>
  
    <button type="submit" class="btn btn-success" style="margin-top:19px">Update</button>
</form>        
</div>

<script type="text/javascript">


    $(document).ready(function() {
      CKEDITOR.replace( 'about' );
    });
      $(".btn-success").click(function(){ 
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
      });
      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".hdtuto").remove();
      });
    });
</script>
</div>
         

        

         
       </section>
 </main>


@endsection

 
 