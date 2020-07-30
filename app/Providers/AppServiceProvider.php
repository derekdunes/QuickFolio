<?php

namespace App\Providers;

use Auth;
use App\User;
use App\Stack;
use App\Level;
use App\Template;
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
    
        
            view()->composer('home', function($view) {
                $users = User::with('payment')->get();
                $templates = Template::all();
                $stacks = Stack::all();
                $levels = Level::all();
                $ser = User::with('stacks')->find(Auth::user()->id);

                $view->with( compact('users', 'templates', 'stacks', 'ser', 'levels'));
            });
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
             Schema::defaultStringLength(191);
    }
}
