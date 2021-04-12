@extends('layouts.app')
@section('main-content')
 
 

 <div class= "container">
 <div class="section-title mt-5 ">
            <h2>Welcome to Testimonial Feature</h2>
            
            <p>Testimonial</p>
  </div>
 
  <div class = "jumbotron" > 
  
   <form action="{{ route('addimage')}}" enctype="multipart/form-data" method="POST">
   @csrf
    
    
        <div class="form-group">
         <label>Enter Your Name</label>
         <input type="text" name="name" id="name" class="form-control" />
         
        </div>
        <div class="form-group">
         <label>Enter Your Jobtitle</label>
         <input type="text" name="jobtitle" id="jobtitle" class="form-control" />
         
        </div>
        <div class="input-group">
           <div class="custom-file">
          <input type="file" id="up" class="custom-file-input" name="image">
          <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
           </div>
          </div>
      
        <div class="form-group">
          <br>
        <textarea class="form-control" rows="8" name="view" cols="100" id="view" placeholder="Your views..." > </textarea>
        
        </div>
        
       
         <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
        
        </form>
      </div>  
   </div>

  
@endsection




