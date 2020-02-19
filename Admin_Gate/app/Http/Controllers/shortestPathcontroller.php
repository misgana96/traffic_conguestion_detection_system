<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\shortestPath;
use App\cameras;
use App\Path;
use App\Camera_two;
use App\Camera_One;


class shortestPathcontroller extends Controller
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
    public function short_path(){
        $s = cameras::all()->toArray();
        $path = Path::all()->toArray();
    	$Camera_One = DB::table('Camera_One')->select('Total_vehicle_count')->where('Camera_One.camera_location', '=', $s[0]["camera_location"])->get();
    	$Camera_two = DB::table('Camera_two')->select('Total_vehicle_count')->where('Camera_two.camera_location', '=', $s[1]["camera_location"])->get();
    	if(($Camera_One[count($Camera_One) -1]->Total_vehicle_count) > ($Camera_two[count($Camera_two) - 1]->Total_vehicle_count)) {
            return response()->json(["I suggest you to drive through road"," " , $path[1]["camera_position"]," ", "to reach"," ", $path[1]["Destination"]]);
    	}

    	if(($Camera_One[count($Camera_One) -1]->Total_vehicle_count) == ($Camera_two[count($Camera_two) - 1]->Total_vehicle_count)) {
    		return response()->json("you can take any road to drive to piazza since the trafic distribution is the same for each road");
    	}

    	if(($Camera_One[count($Camera_One) -1]->Total_vehicle_count) < ($Camera_two[count($Camera_two) - 1]->Total_vehicle_count)){
            return response()->json(["I suggest you to drive through road"," " , $path[0]["camera_position"]," ", "to reach"," ", $path[0]["Destination"]]);
    	}
    }
}
