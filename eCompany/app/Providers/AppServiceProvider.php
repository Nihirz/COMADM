<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\AdminSocial;
use App\AdminLogo;
use App\AdminContact;

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
        $logo=AdminLogo::get();
        view()->share('data3',$logo);
        $social=AdminSocial::get();
        view()->share('data4',$social);
        $contact=AdminContact::get();
        view()->share('data4',$contact);
    }
}
