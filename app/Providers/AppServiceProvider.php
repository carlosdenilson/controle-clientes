<?php

namespace App\Providers;

use App\Repositories\ClienteRepository;
use App\Repositories\Interfaces\IClienteRepository;
use App\Services\ClienteService;
use App\Services\Interfaces\IClienteService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Services
        $this->app->bind(IClienteService::class, ClienteService::class);

        // Repositories
        $this->app->bind(IClienteRepository::class, ClienteRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
