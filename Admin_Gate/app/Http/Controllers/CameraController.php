<?php

namespace App\Http\Controllers;
use DB;
use App\cameras;
use Illuminate\Http\Request;

class CameraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function Add_camera(){
    	return view('Camera.New_camera');
    }
    public function view_camera(){
    	$cameras = DB::select('select * from cameras');
        return view('Camera.view_camera',['cameras'=>$cameras]);
    }
    public function camera_submit(Request $request){
        $this->validate($request,[
                'camera_IP' => 'required',
                'camera_location' => 'required',
                'camera_model' => 'required',
                'status' => 'required',
            ]);
    	$Cameras = new cameras();
    	$Cameras->camera_IP = $request->camera_IP;
    	$Cameras->camera_location = $request->camera_location;
        $Cameras->status = $request->status;
        $Cameras->camera_model = $request->camera_model;
        $Cameras->save();
        return redirect('/cameras'); 
    }

}
