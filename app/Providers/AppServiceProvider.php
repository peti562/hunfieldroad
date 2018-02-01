<?php

namespace App\Providers;

use App\Post;
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
      view()->composer('layouts.home.news_box_horizontal', function($view) {
        $view->with('recentPosts', Post::afterSlider(3,4));
      });
      view()->composer('layouts.home.news_box_vertical', function($view) {
        $view->with('recentPosts', Post::afterSlider(7,4));
      });
      view()->composer('layouts.home.news_slider', function($view) {
        $view->with('recentPosts', Post::recents());
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
