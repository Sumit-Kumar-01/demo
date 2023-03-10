<?php

namespace App\Providers;

use App\Repository\AdminRepository;
use App\Repository\IadminRepository;
use App\Repository\IProductRepository;
use App\Repository\ProductRepository;
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
        //
        $this->app->bind(IProductRepository::class,ProductRepository::class);
        $this->app->bind(IadminRepository::class,AdminRepository::class);

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
