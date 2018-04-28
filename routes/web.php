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

Route::get('/form', function () {
    return view('auth.form');
});

Route::get('/pendapatan', function () {
    return view('manager.pendapatan');
});

Route::get('/pengeluaran', function () {
    return view('manager.pengeluaran');
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

Route::resource('member', 'MemberController');

Route::resource('memberM', 'MemberManagerController');

Route::get('order', 'OrderController@index');

Route::post('transaksi_baru', 'TransaksiController@store');

// Route::get('user/{id}', 'UserTableController@show');

Route::post('/tambah_pegawai', 'AdminController@store');

Route::post('/tambah_member', 'MemberController@store');

Route::get('deleteOrder/{id}', 'OrderController@destroy');

Route::get('deleteTransaksi/{id}', 'AdminController@destroy');

Route::get('deletePegawai/{id}', 'ManagerController@destroy');
Route::get('pegawaiM', 'ManagerController@index');


Route::get('proses', 'ProsesController@index');

// Route::resource('order', 'OrderController');