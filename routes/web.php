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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/corso', function(){
    return view('corso');
})->name('corso');

Route::get('/dopoilcorso', function(){
    return view('dopoilcorso');
})->name('dopoilcorso');

Route::get('/campgratuito', function(){
    return view('campgratuito');
})->name('campgratuito');

Route::get('/candidatiora', function(){
    return view('candidatiora');
})->name('candidatiora');

Route::get('/users', 'UsersController@index')->name('users');

Route::get('/users/{id}','UsersController@show')->name('users.show');
