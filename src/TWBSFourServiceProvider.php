<?php

namespace CleaniqueCoders\TWBSFour;

use Illuminate\Support\ServiceProvider;

class TWBSFourServiceProvider extends ServiceProvider
{
    /**
     * Package Tag Name
     * @var string
     */
    protected $package_tag = 'twbs-four';

    /**
     * Resource Path
     * @var string
     */
    protected $publish_path = 'cleanique-coders/twbs-four';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Views
         */
        $this->loadViewsFrom(__DIR__ . '/resources/views', $this->package_tag);
        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views/vendor/' . $this->publish_path),
        ], $this->package_tag . '-views');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
