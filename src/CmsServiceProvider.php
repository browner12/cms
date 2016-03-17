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

        //publish controllers
        $this->publishes([
            __DIR__.'/controllers' => app_path('Http/Controllers/'),
        ], 'controllers');

        //load views
        $this->loadViewsFrom(__DIR__.'/views', 'cms');

        //publish views
        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/cms'),
        ], 'views');

        //publish configuration
        $this->publishes([
            __DIR__.'/config/cms.php' => config_path('cms.php'),
        ], 'config');

        //publish assets
        $this->publishes([
            __DIR__.'/assets' => public_path('vendor/cms'),
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
