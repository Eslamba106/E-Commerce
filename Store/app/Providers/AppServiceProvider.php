<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {

    }


    public function boot(): void
    {
        if(!app()->runningInConsole()){
            $setting = Setting::firstOr(function(){
            return(
            Setting::create([
                'title'       => 'site_name',
                'description' => 'Eslam'
            ]));
        });    

        view()->share('setting' , $setting);
        }

    }
}
