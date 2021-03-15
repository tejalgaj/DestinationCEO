<?php

namespace App\Providers;
//use App\Models\UserDetail;
use View;
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
        
        
        View::composer('components.form.nav', 'App\Http\Controllers\UserDetailController');
    }
}
