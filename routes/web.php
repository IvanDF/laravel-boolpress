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
// home
Route::get('/', 'HomeController@index')->name('home');

// Publics
Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('posts/{slug}', 'PostController@show')->name('posts.show');

// Logs
Auth::routes();


Route::prefix('admin')
    ->namespace('Admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function() {
        // Admin home
        Route::get('/', 'HomeController@index')->name('home');
        // Crud Post Routs
        Route::resource('posts', 'PostController');
    });
