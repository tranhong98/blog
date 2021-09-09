<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'manager'], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('roles', 'RoleController');
    Route::resource('users', 'UserController');
    Route::resource('articles', 'ArticleController');
});
