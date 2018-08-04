<?php

/*
|--------------------------------------------------------------------------
| Register Namespaces And Routes
|--------------------------------------------------------------------------
|
| When a module starting, this file will executed automatically. This helps
| to register some namespaces like translator or view. Also this file
| will load the routes file for each module. You may also modify
| this file as you want.
|
*/

if (!app()->routesAreCached()) {
    require __DIR__ . '/Http/routes.user.php';
    require __DIR__ . '/Http/routes.admin.php';

    Route::group(['domain' => env('DASHBOARD_DOMAIN', 'admin.rhino.test'), 'namespace' => 'Modules\User\Http\Controllers'], function () {
        require __DIR__ . '/Http/routes.admin.php';
        Route::group(['prefix' => '/api', 'middleware' => ['web', 'auth.admin']], function () {
            require __DIR__ . '/Http/routes.admin.api.php';
        });
    });
}
