<?php

namespace App\Providers;

use App\Models\Backend\BlogCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
    public function boot(): void
    {
        View::composer('frontend.includes.header-bottom', function($view){
            $view->with('blogCategories', BlogCategory::where('status',1)->get());
        });
    }
}
