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

Route::group(['middleware'=>'auth'],function (){
    Route::group(['prefix' => 'controlpanel','middleware'=>'role:admin'], function () {
        Route::resource('/Services','ControlPanelControllers\ServicesController');
        Route::resource('/appointments','ControlPanelControllers\AppointmentController');
        Route::resource('/users','ControlPanelControllers\UserController');
//    Route::get('/userProfile/{id}','ControlPanelControllers\UserController@viewProfile')->name('admin.profile');
        Route::resource('/Services','ControlPanelControllers\ServicesController');
        Route::get('/home', 'HomeController@index')->name('admin.home');


    });

    Route::group(['prefix' => 'website','middleware'=>'role:user'], function () {


        Route::resource('/Service','WebsiteControllers\ServicesController');
        Route::resource('/appointment','WebsiteControllers\AppointmentController');
        Route::view('/contact', 'website\contact')->name('contact');
        Route::view('/home', 'website\rosecenter')->name('user.home');
        Route::resource('/notifications','WebsiteControllers\NotificationController');

        Route::resource('/users', 'WebsiteControllers\UserController');
//    Route::get('/userProfile/{id}','WebsiteControllers\UserController@viewProfile')->name('user.profile');

        Route::resource('/about','WebsiteControllers\AboutController');

    });
    Route::get('/logout/custom', ['as' => 'logout.custom', 'uses' => 'Controller@userLogout']);

});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
