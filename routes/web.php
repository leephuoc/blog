<?php

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

Route::get('/login', 'Login@index');

Route::get('demo', function() {
    dd('agasdf');
});

/**
 * Route Admin
 */
Route::prefix('admin')->group(function() {
//    Route::get('users', 'Users_controller@index');
    Route::get('login', function() {
        return 'abc';
    });
    Route::get('home', 'Home@index');

    Route::get('/category', 'CategoryController@index');
    Route::post('/category', 'CategoryController@index');
    Route::get('/category/create', 'CategoryController@create');
    Route::post('/category/store', 'CategoryController@store');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
