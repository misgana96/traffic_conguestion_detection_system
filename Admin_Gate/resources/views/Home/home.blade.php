@extends('layouts.navbar')
@section('content')

<div class="content">
  <div class="row">
    <div class="col-md-6">
      <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="">
        {{ csrf_field() }}
             <div class="row form-group{{ $errors->has('vehicle_name') ? ' has-error' : '' }}">
                <label for="Vehicle name" class="control-label col-sm-4">Camera Ip</label>
                    <div class="col-sm-7">
                        <select id="camera_IP" type="text" class="form-control " name="camera_IP" value="{{ old('camera_IP') }}" >
                            <option value="">Select</option>
                        @foreach($cameras as $Cameras)
                         <option value="{{ $Cameras->camera_IP }}">{{ $Cameras->camera_IP }}</option>
                        @endforeach
                        </select>
                    @if ($errors->has('camera_IP'))
                        <span class="help-block">
                    <strong>{{ $errors->first('camera_IP')}}</strong>
                        </span>
                    @endif</div>
            </div>
            <div class="row form-group{{ $errors->has('vehicle_name') ? ' has-error' : '' }}">
                <label for="Vehicle name" class="control-label col-sm-4">Camera Location</label>
                    <div class="col-sm-7">
                        <select id="camera_location" type="text" class="form-control " name="camera_location" value="{{ old('camera_IP') }}" >
                            <option value="">Select</option>
                        @foreach($cameras as $Cameras)
                         <option value="{{ $Cameras->camera_location }}">{{ $Cameras->camera_location }}</option>
                        @endforeach
                        </select>
                    @if ($errors->has('vehicle_name'))
                        <span class="help-block">
                    <strong>{{ $errors->first('vehicle_name')}}</strong>
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
          </form>
</div>
<div class="col-md-6">

<div>
  
  <div align="right">
         <video width ="640" height ="360" controls autoplay="" loop="" muted>
             @foreach($Camera_One as $camera_One)
                    @if(isset($camera_One->camera_IP))
                         <source src="{{$camera_One->video}}" type="video/mp4"/>
                    @endif
             @endforeach
             @foreach($Camera_two as $camera_two)
                    @if(isset($camera_two->camera_IP))
                         <source src="{{$camera_two->video}}" type="video/mp4"/>
                    @endif
             
             @endforeach

        </video>
  </div>
   </div> 
    <div class="row form-group{{ $errors->has('Camera_two') ? ' has-error' : '' }}">
                  <label for="vehicles_data name" class="control-label col-sm-4">Count Up</label>
                  <div id="count_up" class="col-sm-7">
                  0
                   </div>
    </div> 
            <div class="row form-group{{ $errors->has('Camera_two') ? ' has-error' : '' }}">
                <label for="vehicles_data name" class="control-label col-sm-4">Count Down</label>
                <div id="count_down" class="col-sm-7">
                    0
                </div>
            </div> 
            <div class="row form-group{{ $errors->has('Camera_two') ? ' has-error' : '' }}">
                <label for="Vehicle name" class="control-label col-sm-4">Total Count</label>
                <div id="count_total" class="col-sm-7">
                  0
                </div>
            </div> 
            <div class="row">
               <btn class="btn btn-success" onclick="updateCounts()">Synchronize</btn>
            </div>
         
</div>
    </div>
    <h2 id="testMessage"></h2>
   
  </div>
 <script src="/js/jquery.min.js"></script>
  <script type="text/javascript">
    console.log('loading...');
    // setInterval(()=>{console.log('logginhg...')}, 1000);
   $(document).ready(function(){
     setInterval( () => {updateCounts();}, 1000);
    // while(true){
    // setInterval(updateCounts(), 2000);
    // }
   })
    function testMyQuery() {
     $('#testMessage').html('success!');
    }


    function  updateCounts() {
      // console.log('about to call the server in ajax mood')
      //ahax call to the server
        var request = $.ajax({
        url: '/getCounts',
        method: 'GET' 
      });
      request.done(function(data){

        // console.log(JSON.parse(data))
        // console.log
        // console.log(counts)
        counts = JSON.parse(data);
        $('#count_up').html(counts.count_up);
        $('#count_down').html(counts.count_down);
        $('#count_total').html(counts.count_total);
        
      });
      }





    
      //  $(document).ready(function() {
      //       $('#testMessage').load('/getCounts');
      //    });

      // $.getJSON('/getCounts',function(counts){
      //   console.log(counts);
        
      // })

   
    // while(true){
    //   updateCounts();

    // }

  </script>
  
@endsection
