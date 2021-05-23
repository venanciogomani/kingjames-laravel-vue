<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Product;
use App\Observers\BrandObserver;
use App\Observers\ProductObserver;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Builder;

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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Brand::observe(BrandObserver::class);
        Product::observe(ProductObserver::class);
		Builder::defaultStringLength(191);
    }
}
