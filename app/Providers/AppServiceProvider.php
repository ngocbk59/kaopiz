<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        View::composer(['layouts.client-header', 'layouts.client-footer'], function ($view) {
            $menus = Category::take(4)->get();
            $cart = session()->has('cart') == true ? session('cart') : [];
            $view->with('menus', $menus);
            $view->with('cart', $cart);
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
