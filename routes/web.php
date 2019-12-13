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

Route::get('/sd', function () {
    echo 123;
});

//微信开发
Route::get('/wx','Wx\WxController@wechat');
Route::get('/aa',function (){
    echo 123;
});