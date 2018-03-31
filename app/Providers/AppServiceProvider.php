<?php

namespace App\Providers;

use App\Post;
use App\Quote;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      view()->composer('partials.recent-posts', function($view) {
        $view->with('recentPosts', Post::recentFive());
      });
      view()->composer('layouts.home.main-page', function($view) {
        $view->with('recentPosts', Post::afterSlider(3,20));
      });
      view()->composer('layouts.home.main-page', function($view) {
        $view->with('recentPostsMobile', Post::recents());
      });
      view()->composer('layouts.home.news_slider', function($view) {
        $view->with('recentPosts', Post::recents());
      });
      view()->composer('partials.random-quotes', function($view) {
        $view->with('quote', Quote::inRandomOrder()->first());
      });
      Carbon::setLocale('hu');

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
