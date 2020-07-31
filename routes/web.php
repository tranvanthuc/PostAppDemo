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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'post'], function () { 
    Route::get('/', 'PostController@index')->name('list-post');
    Route::get('/create', 'PostController@create')->name('create-post');
    Route::post('/', 'PostController@store')->name('store-post');
    Route::get('/{post}', 'PostController@show')->name('detail-post');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
