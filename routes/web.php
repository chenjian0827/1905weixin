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

Route::get('/info', function () {
    phpinfo();
});
// 微信开发

Route::get('/Wx','weixin\Wxcontroller@wechat');
Route::post('/Wx','weixin\Wxcontroller@receiv');    //接受微信的推送事件