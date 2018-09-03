<?php

namespace App\Providers;
use View;
use Auth;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slide;
use App\Models\Attribute;
use App\Models\Order;

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
       View::share(
        [
            
            
            'list_cat' => Category::all(),
            'cats' => Category::where('parent',0)->orderBy('name','ASC')->get(),   
            'slide' => Slide::all(),
            'colors' =>Attribute::where('type','color')->get(),
            'sizes' =>Attribute::where('type','size')->get(),
        ]);
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
