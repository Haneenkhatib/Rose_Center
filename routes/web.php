<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
<<<<<<< HEAD
Route::group(['prefix' => 'controlpanel'], function () {
    Route::resource('/Services','ControlPanelControllers\ServicesController');
});
=======

//Route::get('/', function () {
//    return view('welcome');
//});
Route::group(['prefix' => 'controlpanel'], function () {
    Route::resource('/appointments','ControlPanelControllers\AppointmentController');
    Route::resource('/users','ControlPanelControllers\UserController');
});


>>>>>>> 4e3239f2fd6f2710f29493bb4858822ca423d294
