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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::resource('memberM', 'MemberManagerController');

Route::resource('member', 'MemberController');

Route::resource('profile', 'ProfileController')->middleware('auth');

Route::resource('transaksi', 'TransaksiController');

Route::resource('paket', 'PaketController');

Route::resource('pegawaiM', 'PegawaiManagerController');

Route::resource('user', 'UserController');

Route::resource('pegawai', 'PegawaiHomeController');

Route::resource('manager', 'ManagerHomeController');

Route::resource('transaksiA', 'TransaksiBaruController');

Route::resource('selesai', 'SelesaiController');

Route::resource('proses', 'ProsesController');

Route::resource('diambil', 'DiambilController');

Route::resource('batal', 'BatalController');

Route::resource('password', 'PasswordController');

Route::resource('detailTransaksi', 'DetailTransaksiController');

Route::get('/data', 'MemberController@loadData');
Route::get('/harga', 'TransaksiController@loadData');


Route::resource('/pendapatan', 'PendapatanController');
Route::get('/listPendapatan', 'PendapatanController@listPendapatan');

Route::resource('/pengeluaran', 'PengeluaranController');
Route::get('/listPengeluaran', 'PengeluaranController@listPengeluaran');


Route::GET('admin/home', 'AdminController@index');
Route::GET('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin', 'Admin\LoginController@login');
Route::POST('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin-password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset', 'Admin\ResetPasswordController@reset');
Route::POST('admin-password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');


Route::resource('/profilePegawai', 'ProfilePegawaiController');

Route::resource('/profileManager', 'ProfileManagerController');

// Route::resource('/message', 'MessageController');