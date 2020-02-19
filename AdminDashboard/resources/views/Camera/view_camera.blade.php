@extends('layouts.navbar')
@section('content')
<div class="content">
<div class="d-flex justify-content-between">
  <h4 class="header px-3">cameras</h4>
    <a href="/add_camera" class="btn btn-primary float-right"><i class="fa fa-plus"></i> AddCamera</a>
  </div><hr/>
  <table class="table">
    <thead>
       <tr>
        <th scope="col">Camera IP</th>
        <th scope="col">Camera Location</th>
        <th scope="col">Camera Model</th>
         <th scope="col">Status</th>
      </tr>
    </thead>
   <tbody> 
        @foreach($cameras as $Cameras)
      <tr>
            <td>{{ $Cameras->camera_IP }}</td>
            <td>{{ $Cameras->camera_location }}</td>
            <td>{{ $Cameras->camera_model }}</td>
            <td>{{ $Cameras->status }}</td>
      </tr> 
        @endforeach
      </tbody>
    </table>
  <hr/>
  </div><hr/> 
    <div class="jumbotron col-md-8 offset-md-2 center">
      <h2>Oops!</h2>
      <h4 class="text-secondary">There is no vehicle in database add one now.</h4>
      <hr/><a href="/vehicles/add" class="btn btn-primary"><i class="fa fa-plus"></i> AddVehicle</a> 
    </div>
</div>
@endsection