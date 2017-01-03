<?php

namespace ArmaWorks\Modules\ArmaLife\Providers;

use Caffeinated\Modules\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../Resources/Lang', 'armalife');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'armalife');
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);

        $this->app->bind(\ArmaWorks\Modules\ArmaLife\Repositories\PlayerRepository::class, \ArmaWorks\Modules\ArmaLife\Repositories\Eloquent\PlayerRepository::class);
        $this->app->bind(\ArmaWorks\Modules\ArmaLife\Repositories\VehicleRepository::class, \ArmaWorks\Modules\ArmaLife\Repositories\Eloquent\VehicleRepository::class);
        $this->app->bind(\ArmaWorks\Modules\ArmaLife\Repositories\HouseRepository::class, \ArmaWorks\Modules\ArmaLife\Repositories\Eloquent\HouseRepository::class);
        $this->app->bind(\ArmaWorks\Modules\ArmaLife\Repositories\ContainerRepository::class, \ArmaWorks\Modules\ArmaLife\Repositories\Eloquent\ContainerRepository::class);
        $this->app->bind(\ArmaWorks\Modules\ArmaLife\Repositories\GangRepository::class, \ArmaWorks\Modules\ArmaLife\Repositories\Eloquent\GangRepository::class);
        $this->app->bind(\ArmaWorks\Modules\ArmaLife\Repositories\WantedRepository::class, \ArmaWorks\Modules\ArmaLife\Repositories\Eloquent\WantedRepository::class);
    }
}
