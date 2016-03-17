<?php namespace claritytech\cms;

use Illuminate\Support\ServiceProvider;

class CmsServiceProvider extends ServiceProvider
{
    /**
     *
     */
    public function boot()
    {
        //register routes
        if (! $this->app->routesAreCached()) {
            require __DIR__.'/routes.php';
        }

        //load views
        $this->loadViewsFrom(__DIR__.'/path/to/views', 'cms');

        //publish views
        $this->publishes([
            __DIR__.'/path/to/views' => resource_path('views/vendor/cms'),
        ], 'views');

        //publish configuration
        $this->publishes([
            __DIR__.'/path/to/config/cms.php' => config_path('cms.php'),
        ], 'config');

        //publish assets
        $this->publishes([
            __DIR__.'/path/to/assets' => public_path('vendor/cms'),
        ], 'public');

        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations')
        ], 'migrations');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // TODO: Implement register() method.
    }
}
