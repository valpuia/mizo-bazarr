<?php

namespace App\Providers;

use View;
use App\Category;
use App\SubCategory;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories = Category::all();
        $sub_categories = SubCategory::all();
        View::share('categories', $categories);
        View::share('sub_categories', $sub_categories);
    }
}
