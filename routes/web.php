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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::group(['prefix' => 'controlpanel'], function () {
    Route::resource('/appointments','ControlPanelControllers\AppointmentController');
    Route::resource('/users','ControlPanelControllers\UserController');
    Route::get('/userProfile/{id}','ControlPanelControllers\UserController@viewProfile')->name('user.profile');

});


