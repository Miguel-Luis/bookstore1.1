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

Route::get('/', 'BookController@index');

Route::get('/book/{book}', 'BookController@show');

Route::resource('/category', 'CategoriesController');

Route::get('/login', function() {
    if(Auth::check()) {
        return 'Ya estas logeado';
    } else {
        return view('auth.login');
    }
});

Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/register', function() {
    if(Auth::check()) {
        return 'Actualmente ya estas registrado';
    } else {
        return view('auth.register');
    }
});

Route::post('/register', 'Auth\RegisterController@register')->name('register');
