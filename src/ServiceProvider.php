<?php

namespace Wdelfuego\Nova4\CustomizableFooter;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Laravel\Nova\Nova;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('nova4-customizable-footer', $this->app->basePath("vendor/wdelfuego/nova4-customizable-footer/dist/nova4-customizable-footer.js"));
        
        Nova::router(['nova'], 'nova-vendor/wdelfuego/nova4-customizable-footer')
            ->group($this->app->basePath('vendor/wdelfuego/nova4-customizable-footer/routes.php'));
    }
}
