<?php

Route::group(['domain' => env('DASHBOARD_DOMAIN', "admin.rhino.test"),'middleware' => "web"], function()
{
    Route::get('/login', array('as'=> 'admin.login', 'uses' => "AdminAuthController@getLogin"));
    Route::post('/login', array('as'=> 'admin.login.post', 'uses' => "AdminAuthController@postLogin"));

    Route::post('/registration',  array('as'=> 'admin.registration.post', 'uses' =>"AdminRegistrationController@postRegistration"));

});

