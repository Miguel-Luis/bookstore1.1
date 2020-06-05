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

/* |--------------------------------- Book -------------------------------| */
// Index
Route::get('/', 'BookController@index');

// Mostrar
Route::get('/book/{book}', 'BookController@show');
/* ------------------------------------------------------------------------ */

/* |------------------------------ Category ------------------------------| */
// Index
Route::get('/category', 'CategoriesController@index')->middleware('auth');

// Show
Route::get('/category/show/{category}', 'CategoriesController@show');

// Show Tables
Route::get('/category/show/tables/{category}', 'CategoriesController@showtables')->middleware('auth');

// Crear
Route::get('/category/create', 'CategoriesController@create')->middleware('auth');
Route::post('/category', 'CategoriesController@store')->middleware('auth');

// Edit
Route::get('/category/{id}/edit', 'CategoriesController@edit')->middleware('auth');
Route::put('/category/{id}', 'CategoriesController@update')->middleware('auth');

// Eliminar
Route::delete('/category/{category}', 'CategoriesController@destroy')->name('category.destroy')->middleware('auth');

/* ------------------------------------------------------------------------ */

/* |----------------------------- Statistics -----------------------------| */
Route::get('/statistics', function(){
    return view('general.statistics');
})->middleware('auth');
/* ------------------------------------------------------------------------ */

/* ------------------------------ Autenticación --------------------------- */
// Login
Route::get('/login', function() {
    if(Auth::check()) {
        return 'Ya estas logeado';
    } else {
        return view('auth.login');
    }
});

Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

// Register
Route::get('/register', function() {
    if(Auth::check()) {
        return 'Actualmente ya estas registrado';
    } else {
        return view('auth.register');
    }
});

Route::post('/register', 'Auth\RegisterController@register')->name('register');
/* -------------------------------------------------------------------------- */
