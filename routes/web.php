<?php

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

Route::get('/', 'PagesController@index');

Route::get('/admin/places', 'PagesController@adminPlaces');
Route::get('/admin', 'PagesController@admin')->middleware('admin');

Route::get('/management', 'PagesController@manage')->middleware('manager');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts', 'PostsController');

Route::resource('routes', 'RoutesController');

Route::resource('fleets', 'FleetsController');

Route::resource('places', 'PlacesController');
