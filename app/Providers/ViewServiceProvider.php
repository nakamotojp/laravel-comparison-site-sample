<?php

namespace Lcss\Providers;

use Illuminate\Support\Facades\{Route, View};
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        View::composer('*', function($view) {
            return $view->with('viewport', 'width=device-width,initial-scale=1,user-scalable=no')
                ->with('ogp_type', 'website')
                ->with('seo', config('seo.' . Route::currentRouteName()));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
