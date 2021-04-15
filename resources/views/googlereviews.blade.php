@extends('layouts.admin')
@section('main-content')

<html>
<head>
  <title> Testimonials </title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"> </script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="{{asset('boottheme/assets/css/testimonial.css')}}" rel="stylesheet">
</head>

<body>
<div class= "container">
 <div class="section-title">
            <h2>Welcome to confirm testimonial</h2>
            
            
  </div>

@if(\Session::has('success'))
<div class="alert alert-danger">
<h4> {{ \Session::get('success') }} </h4>
</div>
@endif
<table class="table table-bordered">
  <thead>
    <tr class="thead-dark">
      
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Jobtitle</th>
      <th scope="col">Comment</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($testimonials as $testimonial)
    
     
      <td>{{ $testimonial->id}}</td>
      <td>{{ $testimonial->name}}</td>
      <td>{{ $testimonial->jobtitle}}</td>
      <td>{{ $testimonial->view}}</td>
      <td>{{ $testimonial->status}}</td>
      <td> 
        <a href="/editimage/{{ $testimonial->id }}" class="btn btn-success"> APPROVE </a>
        <a href="/deleteimage/{{ $testimonial->id }}" class="btn btn-danger deletebtn"> REJECT </a>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</body>
</html>





























<!--<form method="GET"> 

<div class = "form-group">
<textarea class="form-control" rows="5" name="view" cols="100" placeholder="Your views..." required> </textarea></div>
<button class="btn btn-primary" name="submit" type="submit" id="but1"> Submit </button>
</form>

      if(isset($_GET["submit"])){
      function detect_sentiment($string){
      $string = urlencode($string);
      $api_key = "12c6daf4bd959c4bd36b460f1c91bc";
      $url = 'https://api.paysify.com/sentiment?api_key='.$api_key.'&string='.$string.'';
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $result = curl_exec($ch);
      $response = json_decode($result,true);
      curl_close($ch);
      return $response;
     

      }
	  
      $string = $_GET["view"];
      $data = detect_sentiment($string);
      echo "<pre>";
      print_r($data);
      echo "</pre>";

   }
?>


    
        


        



       


<html>
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<body>
<div class="elfsight-app-b3795a46-5434-44da-b0ff-e9d66cab1557"></div>
</body>
</html>
-->













