<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'SiteController@index')->name('site.index');
Route::get('/register', 'AuthController@register')->name('auth.register');
Route::post('/register/submit', 'AuthController@postRegister')->name('post.register');
Route::get('/login', 'AuthController@login')->name('auth.login');
Route::post('/login/submit', 'AuthController@postLogin')->name('post.login');
Route::get('/logout', 'AuthController@postLogout')->name('post.logout');

// Dashboard
Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
Route::get('/dashboard/pendaftaran', 'DashboardController@pendaftaran')->name('dashboard.pendaftaran');
Route::post('/dashboard/pendaftaran/post-anak', 'DashboardController@postPendaftaranAnak')->name('dashboard.pendaftaran.post.anak');
Route::post('/dashboard/pendaftaran/post-umum', 'DashboardController@postPendaftaranUmum')->name('dashboard.pendaftaran.post.umum');
Route::post('/dashboard/pendaftaran/post-hamil', 'DashboardController@postPendaftaranHamil')->name('dashboard.pendaftaran.post.hamil');
Route::get('/dashboard/riwayat-pendaftaran', 'DashboardController@riwayat_pendaftaran')->name('dashboard.riwayat_pendaftaran');
Route::get('/dashboard/delete-riwayat-pendaftaran/{registerId}', 'DashboardController@delete_riwayat_pendaftaran')->name('dashboard.delete_riwayat_pendaftaran');