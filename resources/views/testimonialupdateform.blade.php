

 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Testimonial</title>
  <link href="{{asset('boottheme/assets/css/testimonial.css')}}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  </head>
 <body>
 
   <form action="/updateimage/{{ $testimonials->id }}" id = "formupdate" enctype="multipart/form-data" method="POST" >
   @csrf
   @method('PUT')
      <input type="hidden" name="id" id="id" value="{{ $testimonials->id }}" >
    
        <div class="form-group">
         <label>Status</label>
         <input type="text" name="status" value="{{ $testimonials->status = 'approved' }}" id="name1" class="form-control" />
         
        </div>
        
       
         <button type="submit" name="submit" class="btn btn-success btn-lg">Update data</button>
        </div>
        </form>

   
  
  
 </body>


