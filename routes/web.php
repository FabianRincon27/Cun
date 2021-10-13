<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/areas', 'App\Http\Controllers\AreaController@getHome')->name('Areas');
Route::get('/parentesis', 'App\Http\Controllers\AreaController@getParentesis')->name('Parentesis');
Route::get('/users', 'App\Http\Controllers\UserInfoController@getHome')->name('users');
Route::get('/register', 'App\Http\Controllers\UserInfoController@getRegister')->name('register');
Route::post('/register', 'App\Http\Controllers\UserInfoController@postRegister')->name('post-register');
Route::get('/users/{id}/delete', 'App\Http\Controllers\UserInfoController@getDelete')->name('post-delete');
 