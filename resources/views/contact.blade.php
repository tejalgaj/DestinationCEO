@extends('layouts.app')
@section('main-content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form with Laravel and SendGrid</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

<style>
    .contact-form{
    margin-top: 50px;
    width:500px;
    font-size:20px;
    margin-bottom:20px;
   padding:50px;
    align-items:flex-start;
   
    
    }
    .contact-form-image{
    margin-top: 50px;
    width:500px;
    font-size:20px;
    margin-bottom:20px;
    
    align-items:flex-end;
    
    }
    .container-contact-form{
        margin-top: 50px;
 
    font-size:20px;
    margin-bottom:20px;
    display: flex;
    align-items: center;
  justify-content: center;
    
    }
</style>

    <div class="container-contact-form">
    <div class="contact-form">
        @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
        @endif

        <form method="POST" action="/contact">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="email">Your Email address:</label>
                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"
                    placeholder="Enter your email">
                <span class="text-danger">{{ $errors->first('email') }}</span>
            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Your Name:</label>
                <input name="name" type="text" class="form-control" id="name" aria-describedby="name" placeholder="Your name">
                <span class="text-danger">{{ $errors->first('name') }}</span>

            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="phone">Your Cell Number:</label>
                <input name="phone" type="phone" class="form-control" id="phone"  placeholder="Your Phone number">
                <span class="text-danger">{{ $errors->first('phone') }}</span>

            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="exampleInputPassword1">Your Message:</label>
                <textarea name="query" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                <span class="text-danger">{{ $errors->first('query') }}</span>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </br>
            
        </form>
        </div>
        <div class="contact-form-image">
        <img src="{{asset('boottheme/assets/img/contactUS.jpg')}}" alt=".." width="450" height="400">
      </div>
    </div>

</body>

</html>
@endsection