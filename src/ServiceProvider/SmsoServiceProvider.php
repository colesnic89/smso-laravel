<?php

namespace SmsoLaravel\ServiceProvider;

use Illuminate\Support\ServiceProvider;
use SMSO\ApiClient;

/**
 * Class SmsoServiceProvider
 * @package SmsoLaravel
 */
class SmsoServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('smso', function ($app) {
            $apiKey = $app['config']->get('smso.apiKey');
            if ($defaultSender = $app['config']->get('smso.defaultSender')) {
                return new ApiClient($apiKey, $defaultSender);
            }
            return new ApiClient($apiKey);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/smso.php' => config_path('smso.php'),
        ]);
    }

}
