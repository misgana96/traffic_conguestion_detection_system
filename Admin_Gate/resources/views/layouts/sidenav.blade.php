@extends('layouts.header')
@section('container')
<div class="row"> 
	<nav class="col-md-3 col-lg-2 d-none d-md-block bg-light sidebar">
		<div class="sidebar-sticky">
			
			 <ul class="nav flex-column">
			 	<li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#collapsePersonel" role="button" aria-expanded="false" aria-controls="collapsePersonel">
                  <i class="fa fa-users"></i> 
                  Cameras <div class="fa fa-angle-down float-right"></div>
                </a>
                <ul class="collapse" id="collapsePersonel">
                    <li class="nav-item">
                        <a href="/add_camera">
                         <i class="fa fa-user-plus">AddCameras</i>
                          
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/cameras">
                      <i class="fa fa-male"></i>
                         Cameras</a>
                    </li>
                </ul>
              </li>
              <li class="nav-item">
              	 <a class="nav-link" data-toggle="collapse" href="#collapseSetting" role="button" aria-expanded="false" aria-controls="collapseSetting">
                  <i class="fa fa-cogs"></i>  Settings <div class="fa fa-angle-down float-right"></div>
                </a>
              </li>
			 </ul>
		</div>
	</nav>
</div>
<div class="px-4">
            @yield('content')
          </div>

@endsection