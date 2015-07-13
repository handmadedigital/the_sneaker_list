<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$router->get('/', function(){
    return view('home');
});
$router->get('/about-us', function(){
    return view('about');
});
$router->get('/shoe-request', function(){
    return view('shoe-request');
});
$router->post('/shoe-request', ['uses' => 'ShoeRequestController@store']);
$router->get('/how-it-works', function(){
    return view('how-it-works');
});
$router->get('/gallery', function(){
    return view('gallery');
});
$router->get('/contact', function(){
    return view('contact');
});
$router->get('/checkout', ['middleware' => 'auth', 'as' => 'checkout', 'uses' => 'CheckoutController@create']);
$router->post('/checkout', ['middleware' => 'auth', 'as' => 'checkout', 'uses' => 'CheckoutController@store']);




/************************/
/* AUTH */
/**************************/
$router->get('/auth/sign-up', function(){
   return view('auth.sign-up');
});
$router->post('/auth/register', ['as' => 'registration', 'uses' => 'Auth\RegisterController@store']);
$router->post('/auth/login', ['as' => 'registration', 'uses' => 'Auth\SessionController@postLogin']);
