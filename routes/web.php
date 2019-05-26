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
<<<<<<< HEAD
});

Route::get('website', function () {
    return view('Layouts.WebsiteLayout.Layout');
});
=======
    Route::get('/userProfile/{id}','ControlPanelControllers\UserController@viewProfile')->name('user.profile');
    Route::resource('/Services','ControlPanelControllers\ServicesController');

});
>>>>>>> 9a4d93209df570c0adc5704d98dc639dcb799f3b
