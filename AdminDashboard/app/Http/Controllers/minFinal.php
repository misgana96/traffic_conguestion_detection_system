<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use App\camera_one;
use App\camera_one;


class minFinal extends Controller
{
	// public function mini_final(){
	// 	$sql = "SELECT camera_location as `mins` 
	// 	FROM ( SELECT camera_location, Total_vehicle_count FROM camera_one 
	// 	UNION ALL SELECT camera_location, Total_vehicle_count FROM camera_one ) 
	// 	as a ORDER BY Total_vehicle_count ASC LIMIT 1";
	// 	$result = DB::query($sql);
	// 	$gg = DB::fetch($result);
	// 	$var = response()->json($result);
	// 	return $var;
	// }
	public function test(){
		$from = DB::table('camera_one')->SELECT('camera_one.camera_location', 'camera_one.Total_vehicle_count')->where('camera_one.id'=1)->get();
		$result = DB::table('camera_one')->SELECT('camera_one.camera_location', 'camera_one.Total_vehicle_count')->where('camera_one.id'=2)->UNION($from )->get();
		return response()->json($result);
	}
}
