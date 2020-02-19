<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function() {
    Route::get('/', 'HomeController@index');
    Route::get('/', 'HomeController@Camera_Akaki');
    #Route::get('/', 'HomeController@camera_video_submit');
    Route::get('/getCounts', 'HomeController@getCounts');

    Auth::routes();
	
	
	Route::get('/home', 'HomeController@index');
	Route::get('/home', 'HomeController@Camera_Akaki');
  #Route::get('/home', 'HomeController@getCounts');
	Route::post('/home', 'HomeController@camera_video_submit');
  #Route::get('/getCounts', 'HomeController@camera_video_submit');
//---------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------
   Route::get('/cameras', 'CameraController@view_camera');
   Route::get('/add_camera', 'CameraController@Add_camera');
   Route::post('/add_camera', 'CameraController@camera_submit');

//------------------------------------------------------------------------
//--------------------------------------------------------------------------
//--------------------------------------------------------------------------
   Route::get('/pathes', 'pathController@View_pathes');
   Route::get('/add_path', 'pathController@Add_path');
   Route::post('/add_path', 'pathController@Road_Path_submmit');
//--------------------------------------------------------------------------
//--------------------------------------------------------------------------
//--------------------------------------------------------------------------
   Route::get('/shortest', 'shortestPathcontroller@short_path');
   //Route::get('/add_path', 'shortestPathcontroller@short_path');
   //Route::post('/add_path', 'shortestPathcontroller@short_path');

   Route::get('/getshort', 'minFinal@test');

});
