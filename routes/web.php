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

Route::get('/','StaticPagesController@home') -> name('home');
Route::get('help','StaticPagesController@help') -> name('help');
Route::get('about','StaticPagesController@about')-> name('about');
Route::get('signup','UsersController@signUp') -> name('users.signup');
Route::post('/users', 'UsersController@store')->name('users.store');
Route::get('/users/{user}', 'UsersController@show')->name('users.show');
Route::get('login','SessionsController@create') -> name('login');
Route::post('login','SessionsController@store') -> name('login');
Route::delete('logout','SessionsController@destroy') -> name('logout');

