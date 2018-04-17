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
    return view('user.userHome');
});

Route::get('/form', function () {
    return view('auth.form');
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

Route::get('/manager', 'PagesController@manager');

Route::get('/orderA', 'PagesController@orderA');

Route::get('/user', function(){
    return view('/user.userHome');
});

Route::get('/tambah', function(){
    return view('/manager.tambahPegawai');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin', 'TransaksiController@index');

Route::get('member', 'MemberController@admin');

Route::get('memberM', 'MemberController@manager');

Route::get('pegawaiM', 'AdminController@pegawai');
