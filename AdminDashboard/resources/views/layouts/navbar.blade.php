@extends('layouts.header')
@section('container')
<div class="row">
        <nav class="col-md-3 col-lg-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
               <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#collapseDriver" role="button" aria-expanded="false" aria-controls="collapseDriver">
                  <i class="fa fa-camera"></i>  Cameras <div class="fa fa-angle-down float-right"></div>
                </a>
                <ul class="collapse" id="collapseDriver">
                    <li class="nav-item">
                        <a href="/add_camera">
                          <i class="fa fa-plus"></i> AddCameras
                        </a>
                    </li>
                    <li class="nav-item">
                         <a href="/cameras">
                          <i class="fa fa-tasks"></i>Cameras</a>
                    </li>
                </ul>
              </li>
              <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#collapseSetting" role="button" aria-expanded="false" aria-controls="collapseSetting">
                  <i class="fa fa-cog"></i>  Pathes 
                  <div class="fa fa-angle-down float-right"></div>
                </a>
                <ul class="collapse" id="collapseSetting">
                    <li class="nav-item">
                        <a href="/add_path">
                          <i class="fa fa-road"></i>AddPathes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/pathes">
                          <i class="fa fa-road"></i>Pathes
                        </a>
                    </li>
                </ul>
              </li>
    </nav>
    <style>
#navbar{
  width:100%;
  height:60px;
  background-color:rgb(210,220,230);
  color:black;
  top: 0;
}
</style>
        <main role="main" class="ml-sm-auto col-md-9 col-lg-10">
   <div class="row mb-4 bg-white mt-0 border-bottom justify-content-between" href="/admins/edit">
        <div class="col" id="navbar">
            
            </div>
          </div>
          <div class="px-4">
            @yield('content')
          </div>
        </main>
      </div>
    </div>
@endsection