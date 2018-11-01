<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

 if(env('REDIRECT_HTTPS'))
  {
    $url->forceSchema('https');
  }

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('/generate-token', function () use ($router) {
    // return $router->app->version();
    return view('index');
});


$router->get('/privacy-policy', function () use ($router) {
    // return $router->app->version();
    return view('index');
});


$router->get('/return/insta/regist-token', function () use ($router) {
    // return $router->app->version();
    return view('index');
});


$router->get('key', function () use ($router) {
    // return $router->app->version();
    return str_random(32);
});

