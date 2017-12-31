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
         * Assets
         */
        $this->publishes([
            __DIR__ . '/stubs/public'    => public_path(),
            __DIR__ . '/stubs/app'       => base_path(),
            __DIR__ . '/resources/views' => resource_path('views'),
        ], $this->package_tag);
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
