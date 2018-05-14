<?php

Route::group(['prefix' => 'user','domain' => env('DASHBOARD_DOMAIN', "admin.rhino.test"),'middleware' => "web"], function()
{
    Route::get('/login', array('as'=> 'admin.login', 'uses' => "AdminController@index"));
    Route::post('/login', array('as'=> 'admin.login.post', 'uses' => "AdminAuthController@postLogin"));


    Route::get('/registration',  array( 'uses' =>"AdminRegistrationController@getRegister"));
    Route::post('/registration',  array( 'uses' =>"AdminRegistrationController@postRegister"));

});

