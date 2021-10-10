<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//!pagine statiche
Route::get('/','HomeController@index')->name('home');
Route::get('/contact','ContactController@index')->name('contact');

//!travels
Route::get('/travels','TravelController@index')->name('travels.index');