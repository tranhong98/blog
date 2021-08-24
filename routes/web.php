<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('roles', 'RoleController');

Route::resource('users', 'UserController');

Route::resource('articles', 'ArticleController');

Route::get('demo/{name}/{age}', function ($name, $age) {
    return $name . $age;
});
