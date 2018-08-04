<?php

Route::group(['middleware' => 'web', 'namespace' => 'Modules\Base\Http\Controllers'], function()
{
Route::get('/', 'BaseController@index');
});