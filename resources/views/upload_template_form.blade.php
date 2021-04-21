<link href="{{asset('boottheme/assets/css/style.css')}}" rel="stylesheet">

@extends('layouts.admin')
@section('main-content')


<!-- Modal for delete confirmation -->

    <div class="container">
</br></br></br></br>
    <div class="section-title">
            <h2>Welcome to Templates</h2>
            
            <p>Your Templates </p>
          </div>
        <div class="jumbotron">
        
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Templates</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
    <?php $count = 1;?>
    @foreach ($templates as $template)
    <?php $info = pathinfo($template->filenames);
   
    $file_name =  $info['filename'];?>
    <tr>
      <th>{{$count++}}</th>
      <th><a href= "{{ URL::to('/') }}/files/templates/{{$template->filenames}}" alt="file" rel="noopener noreferrer" target="_blank"  >{{$file_name}}</a>
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

