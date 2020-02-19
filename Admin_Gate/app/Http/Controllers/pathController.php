<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
#use App\Camera_One;
#use App\Camera_two;
#use App\cameras;
use App\Path;

class pathController extends Controller
{
          /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function Add_path(){
        return view('Pathes.newpath');
    }
    public function View_pathes(){
        $path = DB::select('select * from paths');
        return view('Pathes.view_pathes',['path'=>$path]);
    }
    public function Road_Path_submmit(Request $request ){
            $this->validate($request,[
                'Starting1' => 'required',
                #'camera_position' => 'required',
                #'Destination' => 'required',
            ]);

            $pathes = new Path();
            $pathes->Starting1 = $request->Starting1;
            $pathes->camera_position = $request->camera_position;
            $pathes->Destination1 = $request->Destination1;
            $pathes->save();
            return redirect('/pathes');
            #s$pathes->total_count = $request->total_count;


            #$cameras = DB::table('cameras')->where('camera_location', '=', $request->#camera_location)->get();
            #foreach ($cameras as $Cameras) {
             #  $Cameras->camera_location;
            #}
            
            #if($request->camera_position == $Cameras->camera_location){
            #   $Camera_One = DB::table('Camera_One')->where('Camera_One.camera_location', '=', $request->camera_position )->get();
            #   foreach ($Camera_One as $camera_One) {
                    #$camera_One->Total_vehicle_count;
             #   }
                #$Camera_two = DB::table('Camera_two')->where('Camera_two.camera_location', '=', $request->camera_position )->get();

                #foreach($Camera_two as $camera_two) {
                    #$camera_two->Total_vehicle_count;
                #}
            #}

           # $pathes->Crossing = $request->Crossing;
 
    }

}
