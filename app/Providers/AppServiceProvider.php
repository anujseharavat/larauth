<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Billing\Stripe;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    //protected $defer = true;
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('layouts.sidebar', function ($view) {
            $archives = \App\Post::archives();
            $tags = \App\Tag::has('posts')->pluck('name');

            $view->with(compact('archives', 'tags'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Stripe::class, function () {
            return new Stripe(config('services.stripe.secret'));
        });
        //can pass app variable to function closure if need to use app::make ...means some other container if required
        /*$this->app->singleton(Stripe::class, function ($app) {
            $app->make();
            return new Stripe(config('services.stripe.secret'));
        });*/
//        \App::singleton('App\Billing\Stripe', function () {
//            return new \App\Billing\Stripe(config('services.stripe.secret'));
//        });

    }
}
