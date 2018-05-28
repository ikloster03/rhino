<?php

Route::group(['middleware' => 'web', 'prefix' => '', 'namespace' => 'Modules\Document\Http\Controllers'], function()
{
    Route::get('/', 'DocumentController@index');
    Route::get('/document', 'DocumentController@document');
});
