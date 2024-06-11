<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Blade::directive('money', function ($amount) {
            return "<?php
                if($amount < 0) {
                    $amount *= -1;
                    echo '-' . number_format($amount, 2);
                } else {
                    echo '' . number_format($amount, 2);
                }
            ?>";
     });
    }
}