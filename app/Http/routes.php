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
$router->post('/shoe-request', ['uses' => 'ShoeRequestController@postShoeRequest']);
$router->get('/how-it-works', function(){
    return view('how-it-works');
});
$router->get('/gallery', function(){
    return view('gallery');
});
$router->get('/contact', function(){
    return view('contact');
});
