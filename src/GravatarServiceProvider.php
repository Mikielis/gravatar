<?php

namespace Mikielis\Gravatar;

use Illuminate\Support\ServiceProvider;

/**
 * Class GravatarServiceProvider
 * @package Mikielis\Gravatar
 */
class GravatarServiceProvider extends ServiceProvider {
	
	/**
	 * Register the service provider
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('gravatar', function () {
			return new Gravatar;
		});
	}

	/**
	 * Get the services provided by the provider
	 *
	 * @return array
	 */
	public function provides()
	{
		return [];
	}

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
	public function boot()
	{
	}

}
