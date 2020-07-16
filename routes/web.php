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
//注册
Route::get("register/register","Register\RegisterController@register");
Route::post("register/registerdo","Register\RegisterController@registerdo");  //注册执行
//登录
Route::get("login/login","Login\LoginController@login");
Route::post("login/logindo","Login\LoginController@logindo");

//个人中心
Route::get("user/index","User\UserController@index")->middleware("login");