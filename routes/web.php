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


Route::get('/pendapatan', function () {
    return view('manager.pendapatan');
});

Route::get('/pengeluaran', function () {
    return view('manager.pengeluaran');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::resource('memberM', 'MemberManagerController');

Route::resource('member', 'MemberController');

Route::resource('profile', 'ProfileController')->middleware('auth');

Route::resource('order', 'OrderController');

Route::resource('paket', 'PaketController');

Route::resource('pegawai', 'PegawaiController');

Route::resource('user', 'UserController');

Route::resource('admin', 'AdminHomeController');

Route::resource('manager', 'ManagerHomeController');

Route::resource('orderA', 'TransaksiAdminController');

Route::resource('selesai', 'SelesaiController');

Route::resource('proses', 'ProsesController');

Route::resource('diambil', 'DiambilController');

Route::resource('batal', 'BatalController');

Route::resource('password', 'PasswordController');





