<?php

namespace App\Providers;
//use App\Models\UserDetail;
use View;
use Illuminate\Support\ServiceProvider;
use App\Models\admin_address_detail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\update_footer_address;

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
        
        View()->composer('layouts.app',function($view){
            $view->with(['admin_address_details'=>admin_address_detail::all()]);
             });
        View::composer('components.form.nav', 'App\Http\Controllers\UserDetailController');
    }
}
