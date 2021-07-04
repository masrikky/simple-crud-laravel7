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

//Redirect default route to blog
Route::get('/', function () {
    return redirect()->route('blogs.index');;
});

Route::resource('blogs', 'BlogsController');
Route::delete('blogs/{id}', 'BlogsController@destroy') ->name('blogs.destroy');
Route::put('blogs/{id}/edit', 'BlogsController@edit')->name('blogs.edit');
Route::post('blogs/{id}/update', 'BlogsController@update')->name('blogs.update');