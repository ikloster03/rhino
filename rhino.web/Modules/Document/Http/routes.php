<?php

Route::group(['middleware' => 'web', 'prefix' => 'document', 'namespace' => 'Modules\Document\Http\Controllers'], function()
{
    Route::get('/', 'DocumentController@index');
});
