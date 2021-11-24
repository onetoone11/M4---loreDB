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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/createuni', 'App\Http\Controllers\PagesController@createuni');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
// Route::get('/story', 'App\Http\Controllers\PagesController@stories');
Route::get('/stories', 'App\Http\Controllers\StoriesController@index');
Route::get('/stories/create', 'App\Http\Controllers\StoriesController@create');
Route::get('/stories/{id}/edit', 'App\Http\Controllers\StoriesController@edit');
Route::get('/story', 'App\Http\Controllers\PagesController@story');
Route::get('/edituni', 'App\Http\Controllers\PagesController@edit');

Route::resource('stories','App\Http\Controllers\StoriesController');
Route::resource('pages','App\Http\Controllers\PagesController');