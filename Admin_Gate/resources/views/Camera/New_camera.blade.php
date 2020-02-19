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
            
             <div class="row form-group{{ $errors->has('camera_IP') ? ' has-error' : '' }}">
                <label for="Vehicle name" class="control-label col-sm-4">Camera Ip</label>
                    <div class="col-sm-7">
                    <input id="camera_IP" type="text" class="form-control " name="camera_IP" value="{{ (isset($vehicle) && count($vehicle)>0) ? $vehicle[0]->vehicle_name : old('vehicle_name') }}" >      
                    @if ($errors->has('camera_IP'))
                        <span class="help-block">
                    <strong>{{ $errors->first('camera_IP')}}</strong>
                        </span>
                    @endif</div>
            </div>
            <div class="row form-group{{ $errors->has('vehicle_name') ? ' has-error' : '' }}">
                <label for="Vehicle name" class="control-label col-sm-4">Camera Location</label>
                    <div class="col-sm-7">
                        <input id="camera_location" type="text" class="form-control " name="camera_location" value="{{ (isset($vehicle) && count($vehicle)>0) ? $vehicle[0]->vehicle_name : old('vehicle_name') }}" >
                    @if ($errors->has('camera_location'))
                        <span class="help-block">
                    <strong>{{ $errors->first('camera_location')}}</strong>
                        </span>
                    @endif</div>
            </div>
              <div class="row form-group{{ $errors->has('vehicle_name') ? ' has-error' : '' }}">
                <label for="Vehicle name" class="control-label col-sm-4">Camera Model</label>
                    <div class="col-sm-7">
                        <input id="camera_model" type="text" class="form-control " name="camera_model" value="{{ (isset($vehicle) && count($vehicle)>0) ? $vehicle[0]->vehicle_name : old('vehicle_name') }}" >
                    @if ($errors->has('camera_model'))
                        <span class="help-block">
                    <strong>{{ $errors->first('camera_model')}}</strong>
                        </span>
                    @endif</div>
            </div>
              <div class="row form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                <label for="Status" class="control-label col-sm-4">Status</label>
                    <div class="col-sm-7">
                    <select id="status" type="text" class="form-control row-sm-7" name="status" value="{{ (isset($status) && count($status)>0) ? $user[0]->sex : old('sex') }}" >>
                        <option value="On">On</option>
                        <option value="Off">Off</option>
                    </select>     
                    @if ($errors->has('status'))
                        <span class="help-block">
                    <strong>{{ $errors->first('status')}}</strong>
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
