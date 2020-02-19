@extends('layouts.navbar')
@section('content')
<div class="col px-0">
<a href="/home" class="btn btn-primary float-right"><i class="fa fa-home-left"></i> Home</a>
</div>
<div class="content">
     
<form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="">
        {{ csrf_field() }}
    <div class="row">
        <div class="row p-3">
           <div class="row-md-6">
            
             <div class="row form-group{{ $errors->has('Starting') ? ' has-error' : '' }}">
                <label for="Vehicle name" class="control-label col-sm-4">Road Starting</label>
                    <div class="col-sm-7">
                    <input id="Starting1" type="text" class="form-control " name="Starting1" value="{{ (isset($vehicle) && count($vehicle)>0) ? $vehicle[0]->vehicle_name : old('vehicle_name') }}" >      
                    @if ($errors->has('Starting1'))
                        <span class="help-block">
                    <strong>{{ $errors->first('Starting1')}}</strong>
                        </span>
                    @endif</div>
            </div>
            <div class="row form-group{{ $errors->has('camera_position') ? ' has-error' : '' }}">
                <label for="Vehicle name" class="control-label col-sm-4">Camera Position</label>
                    <div class="col-sm-7">
                        <input id="camera_position" type="text" class="form-control " name="camera_position" value="{{ (isset($vehicle) && count($vehicle)>0) ? $vehicle[0]->vehicle_name : old('vehicle_name') }}" >
                    @if ($errors->has('camera_position'))
                        <span class="help-block">
                    <strong>{{ $errors->first('camera_position')}}</strong>
                        </span>
                    @endif</div>
            </div>
              <div class="row form-group{{ $errors->has('Destination') ? ' has-error' : '' }}">
                <label for="Vehicle name" class="control-label col-sm-4">Destination</label>
                    <div class="col-sm-7">
                        <input id="Destination1" type="text" class="form-control " name="Destination1" value="{{ (isset($vehicle) && count($vehicle)>0) ? $vehicle[0]->vehicle_name : old('vehicle_name') }}" >
                    @if ($errors->has('Destination1'))
                        <span class="help-block">
                    <strong>{{ $errors->first('Destination1')}}</strong>
                        </span>
                    @endif</div>
            </div>
             <div>
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                     submit
                    </button>
                </div>
            </div>



</div>
</div>
</div>
</form>
</div>


    
@endsection
