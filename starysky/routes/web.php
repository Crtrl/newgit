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


Route::get('/admin/index','admin\IndexController@Index');
//公共页面
Route::get('/admin/common','admin\IndexController@common');

Route::get('/admin/login','admin\LoginController@login');


Route::resource('admin/user','admin\UserController');


//前台友情链接
Route::get('home/friends','home\FriendsController@friends');



//后台友情链接管理
Route::resource('admin/friends','admin\FriendsController');

//前台修改头像
Route::get('/home/user/profile','home\UserController@profile');