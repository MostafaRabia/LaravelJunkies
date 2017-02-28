<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Fix Migrate Problem
        Schema::defaultStringLength(191);

        // For Defaults
        $pathsArray = [
            'admin_css'     => url('public/admin/css'),
            'admin_js'      => url('public/admin/js'),
            'admin_image'   => url('public/admin/images'),
            'shop_css'      => url('public/shop/css'),
            'shop_js'       => url('public/shop/js'),
            'shop_image'    => url('public/shop/images'),
            'shop_view'     => 'shop',
            'admin_view'    => 'admin',
        ];
        foreach ($pathsArray as $Name => $Path) {
            app()->singleton($Name,function() use ($Path){
                return $Path;
            });
        }
        // To Use It app('css') / {{app('css')}}

        // For Tiltes
        app()->singleton('title',function(){
            return "Laravel Junkies Ecommerce";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
