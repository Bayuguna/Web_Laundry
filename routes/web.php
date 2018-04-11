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

Route::get('/login-admin', 'PagesController@admin');

Route::get('/login-user', 'PagesController@user');

Route::get('/register', 'PagesController@register');

Route::get('/admin', 'PagesController@homeAdmin');

Route::get('/order', 'PagesController@order');

Route::get('/proses', 'PagesController@proses');

Route::get('/selesai', 'PagesController@selesai');

Route::get('/batal', 'PagesController@batal');

Route::get('/dataTransaksi', 'PagesController@dataTransaksi');

Route::get('/member', 'PagesController@member');

Route::get('/manager', 'PagesController@manager');

Route::get('/pegawaiM', 'PagesController@pegawaiM');

Route::get('/memberM', 'PagesController@memberM');

Route::get('/orderA', 'PagesController@orderA');

Route::get('/user', function(){
    return view('/user.userHome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

