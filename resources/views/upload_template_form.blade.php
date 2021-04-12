<link href="{{asset('boottheme/assets/css/style.css')}}" rel="stylesheet">

@extends('layouts.admin')
@section('main-content')


<!-- Modal for delete confirmation -->

    <div class="container">
        <div class="jumbotron">
        <h1 class="well" style="color:#3ac162; padding-top: 20px;"> Your saved templates</h1>
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Templates</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($templates as $template)
   
    <tr>
      <th>{{$template->id}}</th>
      <th><a href= "{{ URL::to('/') }}/files/templates/{{$template->filenames}}" alt="file" rel="noopener noreferrer" target="_blank"  >{{$template->filenames}}</a>
</th>

   <!-- //<th> <a href= "{{ route('wordtopdf') }}" alt="file" target="_blank" height="100px" >dcd</a></th>  -->
      <th><a href="/deleteFile/{{$template-> id}}" class=" btn btn-danger"> DELETE</a></th>
    </tr>
    @endforeach
  </tbody>
</table>

        </div>
    </div>
    
    @endsection

