<?php
namespace luoyy\AliCore\Providers;

use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider;
use Laravel\Lumen\Application as LumenApplication;
use luoyy\AliCore\DefaultAcsClient;
use luoyy\AliCore\Profile\DefaultProfile;
use luoyy\AliCore\Regions\EndpointConfig;

class AcsClientServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupConfig();
    }

    /**
     * Setup the config.
     *
     * @return void
     */
    protected function setupConfig()
    {
        $source = realpath(__DIR__ . '/../config/alicore.php');
        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$source => config_path('alicore.php')]);
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('alicore');
        }
        $this->mergeConfigFrom($source, 'alicore');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(DefaultAcsClient::class, function ($app) {
            // 载入配置
            $config = $app->make('config')->get('alicore');
            EndpointConfig::setEndpoints($config['ALiRegionId']);
            return new DefaultAcsClient(DefaultProfile::getProfile($config['ALiRegionId'], $config['ALiAccessKeyID'], $config['ALiAccessKeySecret']));
        });
    }
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            DefaultAcsClient::class
        ];
    }
}
