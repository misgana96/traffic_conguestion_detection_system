@extends('layouts.navbar')
@section('content')
<div class="content">
<div class="d-flex justify-content-between">
  <h4 class="header px-3">pathes</h4>
    <a href="/add_path" class="btn btn-primary float-right"><i class="fa fa-plus"></i> AddPath</a>
  </div><hr/>
  <table class="table">
    <thead>
       <tr>
        <th scope="col">Starting</th>
        <th scope="col">Camera Position</th>
        <th scope="col">Destination</th>
      </tr>
    </thead>
   <tbody> 
        @foreach($path as $Path)
      <tr>
            <td>{{ $Path->Starting }}</td>
            <td>{{ $Path->camera_position }}</td>
            <td>{{ $Path->Destination }}</td>
      </tr> 
        @endforeach
      </tbody>
    </table>
@endsection