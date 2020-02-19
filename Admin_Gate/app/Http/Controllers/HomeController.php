<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Camera_One;
use App\Camera_two;
use App\cameras;
use App\accessed_camera;
class HomeController extends Controller
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
    public function index(){
   
         return view('Home.home');

         }
    public function Camera_Akaki(){
    	$Camera_One = DB::table('Camera_One')->where('Camera_One.camera_IP', '=', '192.00.89.2')->get();
      $Camera_two = DB::table('Camera_two')->where('Camera_two.camera_IP', '=', '192.66.60.00')->get();
      $cameras = DB::select('select * from cameras');
        return view('Home.home',['cameras'=>$cameras, 'Camera_One'=>$Camera_One, 'Camera_two'=>$Camera_two]);
         }
    public function camera_video_submit(Request $request){
            $this->validate($request,[
                'camera_IP' => 'required',
                'camera_location' => 'required',
            ]);
            $accessed_camera = new accessed_camera();
            $accessed_camera->camera_IP = $request->camera_IP;
            $accessed_camera->camera_location = $request->camera_location;
            $cameras = cameras::where('camera_location', '=', $request->camera_location)->get();
            foreach ($cameras as $Cameras) {
                $Cameras->camera_IP;
                $Cameras->camera_location;
            }
           $r = $request->camera_IP;
           if($request->camera_IP == $Cameras->camera_IP){
                $Camera_One = DB::table('Camera_One')->where('Camera_One.camera_IP', '=', $request->camera_IP )->get();
                $cameras = DB::select('select * from cameras');
                $Camera_two = DB::table('Camera_two')->where('Camera_two.camera_IP', '=', $request->camera_IP )->get();
              return  view('Home.home',['cameras'=>$cameras, 'Camera_One'=>$Camera_One, 'Camera_two'=>$Camera_two,]);
           }
   }

    public function getCounts()
    {   
        $Camera_One = DB::table('Camera_One')->where('Camera_One.camera_IP', '=', '192.00.89.2')->get();

        $Camera_two = DB::table('Camera_two')->where('Camera_two.camera_IP', '=', '192.66.60.00')->get();
        $camera_piazza = response()->json($Camera_One);
        $camera_piazza = json_decode($camera_piazza->content(), true);
        $w = $camera_piazza[0]["camera_IP"];

        $camera_gorgies = response()->json($Camera_two);
        $camera_gorgies = json_decode($camera_gorgies->content(), true);
        $s = $camera_gorgies[0]["camera_IP"];
       if($w == "192.00.89.2"){
          return '{ "count_up" : "'.$Camera_One[count($Camera_One) - 1]->Vehicle_count_up.'", "count_down" : "'.$Camera_One[count($Camera_One) - 1]->Vehicle_count_down.'", "count_total" : "'.$Camera_One[count($Camera_One) - 1]->Total_vehicle_count.'" }';
        }
       if($s== "192.66.60.00"){
          return '{ "count_up" : "'.$Camera_two[count($Camera_two) - 1]->Vehicle_count_up.'", "count_down" : "'.$Camera_two[count($Camera_two) - 1]->Vehicle_count_down.'", "count_total" : "'.$Camera_two[count($Camera_two) - 1]->Total_vehicle_count.'" }';
       }
    }
}