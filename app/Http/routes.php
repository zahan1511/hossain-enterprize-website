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

Route::get('/','HomeController@index');
Route::get('/about','HomeController@about');
Route::get('/services','HomeController@service');
Route::get('/faq','HomeController@faq');
Route::get('/convert','HomeController@convert');
Route::get('/bangladesh','HomeController@bangladesh');
Route::get('/payment','HomeController@payment');
Route::get('/contact','HomeController@contact');
Route::get('/products/{id}','HomeController@show');
Route::get('/products/aboutproduct/{id}','HomeController@aboutproduct');


