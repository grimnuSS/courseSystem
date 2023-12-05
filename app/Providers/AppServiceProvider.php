<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        View::composer('front.inc.header', function ($view) {
            $categories = Category::orderBy('categoryName', 'asc')->get();
            $view->with('categories', $categories);
        });
        View::composer('front.pages.index', function ($view) {
            $categories = Category::orderBy('categoryName', 'asc')->get();
            $view->with('categories', $categories);
        });
    }
}
