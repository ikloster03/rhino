<?php namespace Modules\User\Providers\Admin;

use Illuminate\Support\ServiceProvider;
use Modules\User\Entities\Admin;
use Config;
use Modules\User\Repositories\Admin\AdminAuthentication;
use Modules\User\Repositories\Admin\AdminRemoteAuthentication;
use Modules\User\Repositories\Admin\AdminRepository;


class AdminServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Boot the application events.
	 * 
	 * @return void
	 */
	public function boot()
	{

	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{

        $this->app->bind(
            'Modules\User\Repositories\Admin\AdminRepository',
            function () {

                $repository = new AdminRepository(new Admin());
                if (! Config::get('app.cache')) {
                    return $repository;
                }
                return new CachePageDecorator($repository);
            }
        );

        $this->app->bind(
            'Modules\User\Repositories\Admin\AdminAuthentication',
            function () {
                $repository = new AdminAuthentication('admins');
                if (! Config::get('app.cache')) {
                    return $repository;
                }
                return new CachePageDecorator($repository);
            }
        );


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
