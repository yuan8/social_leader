<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Laravel\Lumen\Routing\UrlGenerator;
class AppServiceProvider extends ServiceProvider
{
   
   

   	public function boot(UrlGenerator $url){

   		 if(env('REDIRECT_HTTPS'))
		  {
		    $url->forceSchema('https');
		  }
		
		  // Schema::defaultStringLength(191);
	}

    public function register()
    {
      


    }
}
