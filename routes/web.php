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
Route::get('/users/{user}/edit','UsersController@edit') -> name('users.edit');
Route::PUT('/users/{user}','UsersController@update') -> name('users.update');
Route::get('/users','UsersController@index') -> name('users.index');
Route::delete('users/{user}','UsersController@destroy') -> name('users.destroy');
Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
Route::resource('statuses', 'StatusesController', ['only' => ['store', 'destroy']]);
