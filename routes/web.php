<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'manager', 'middleware' => ['auth', 'admin' ]], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('roles', 'RoleController');
    Route::resource('users', 'UserController');
    Route::resource('articles', 'ArticleController');
    Route::resource('products', 'ProductController');
    Route::resource('comments', 'CommentController');
    Route::resource('categories', 'CategoryController');
});
