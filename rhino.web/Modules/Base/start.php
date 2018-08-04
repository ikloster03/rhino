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
    require __DIR__ . '/Http/routes.php';

    Route::group(['middleware' => ['web', 'auth.admin'],'domain' => env('DASHBOARD_DOMAIN', 'admin.rhino.dev')], function () {
        require __DIR__ . '/Http/admin.routes.php';
    });
}
