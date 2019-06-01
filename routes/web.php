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

Route::group(['prefix' => 'controlpanel'], function () {
    Route::resource('/Services','ControlPanelControllers\ServicesController');
    Route::resource('/appointments','ControlPanelControllers\AppointmentController');
    Route::resource('/users','ControlPanelControllers\UserController');
    Route::get('/userProfile/{id}','ControlPanelControllers\UserController@viewProfile')->name('user.profile');
    Route::resource('/Services','ControlPanelControllers\ServicesController');
});

Route::group(['prefix' => 'website'], function () {
<<<<<<< HEAD
    Route::resource('/Service','WebsiteControllers\ServicesController');
=======
//    Route::resource('/Services','WebsiteControllers\ServicesController');
>>>>>>> 7e34263f79a578cc08b1e48e5ea5712f386292a9
});


