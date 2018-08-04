<?php namespace Modules\User\Providers\Admin;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class AdminRouteServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

    public function boot(Router $router)
    {


        $router->bind('admin', function ($id) {
            $user = app(\Modules\User\Repositories\Admin\AdminRepository::class)->findOrFail($id);
            if(!$user){
                abort(404);
            }else{
                return $user;
            }
        });


    }
	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{

	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
