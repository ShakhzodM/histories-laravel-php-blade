<?php

namespace App\Providers;

use App\Extensions\Dem;
use Illuminate\Support\Facades\Cache;
use Laravel\Cashier\Cashier;
use Illuminate\Support\ServiceProvider;
use DB;
use Illuminate\Support\Facades\View;
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
    
    }
}
