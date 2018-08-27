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
//主界面路由
Route::get('/','StaticPagesController@home') -> name('home');
//帮助页面路由
Route::get('help','StaticPagesController@help') -> name('help');
//关于页面路由
Route::get('about','StaticPagesController@about')-> name('about');
//跳转到注册界面
Route::get('signup','UsersController@signUp') -> name('users.signup');
//登陆操作路由
Route::post('/users', 'UsersController@store')->name('users.store');
//展示所有用户路由
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
Route::get('/users/{user}/followings', 'UsersController@followings')->name('users.followings');
Route::get('/users/{user}/followers', 'UsersController@followers')->name('users.followers');
Route::post('/users/followers/{user}', 'FollowersController@store')->name('followers.store');
Route::delete('/users/followers/{user}', 'FollowersController@destroy')->name('followers.destroy');
Route::get('author','UsersController@author') -> name('users.author');