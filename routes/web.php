<?php

/*
|--------------------------------------------------------------------------
| Web Routes  web 路由
|--------------------------------------------------------------------------
| hello，大家好，我是morty-laravel的作者，整个版本都是基于5.5进行改造的laravel哦
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
