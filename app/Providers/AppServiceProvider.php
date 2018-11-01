<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\URL;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */

   	public function boot(UrlGenerator $url){
        
   		 if(env('REDIRECT_HTTPS'))
		  {
		    $url->forceSchema('https');
		  }
		
		  Schema::defaultStringLength(191);
	}

    public function register()
    {
      


    }
}
