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
        $this->loadViewsFrom(__DIR__.'/path/to/views', 'courier');

        //publish views
        $this->publishes([
            __DIR__.'/path/to/views' => resource_path('views/vendor/courier'),
        ], 'views');

        //publish configuration
        $this->publishes([
            __DIR__.'/path/to/config/courier.php' => config_path('courier.php'),
        ], 'config');

        //publish assets
        $this->publishes([
            __DIR__.'/path/to/assets' => public_path('vendor/courier'),
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
