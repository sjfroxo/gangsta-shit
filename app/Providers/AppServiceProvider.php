<?php

namespace App\Providers;

use App\Http\View\Composers\CategoryComposer;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', CategoryComposer::class);

    }
}
