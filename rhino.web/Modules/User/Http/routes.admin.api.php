<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {

    Route::get('/privilege/grant','AdminPrivilegeController@grant');

    Route::get('/','AdminController@index');

    Route::get('/search','AdminController@search');
    Route::post('/','AdminController@store');
    Route::post('/invite','AdminController@storeByInvite');
    Route::get('/{admin}','AdminController@show');
    Route::put('/{admin}','AdminController@update');
    Route::post('/{admin}/invite','AdminController@resendInvite');
    Route::delete('/{admin}','AdminController@destroy');
});