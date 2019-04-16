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

// Route::get('/users/{id}/{name}', function ($id, $name) {
//     return 'This is user '.$name.' with an ID of '.$id;
// });

Route::get('/hello', function () {
    //return view('welcome');
    return '<h1>Hello World<h1>';
});

Route::get('/about', function () {
    return view('pages.about');
});

//Eerste parameter wordt gekoppeld aan de URL-input in adresbalk.
// De tweede geeft aan welke functie in de controller wordt aangeroepen
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('home');
