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

Route::get('/', function () {
    return view('auths.login');
});

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin')->name('postLogin');
Route::get('/logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
    Route::get('/siswa', 'SiswaController@index')->name('siswa');
    Route::post('/siswa/create', 'SiswaController@create')->name('tambah');
    Route::get('/siswa/{id}/edit', 'SiswaController@edit')->name('edit');
    Route::post('/siswa/{id}/update', 'SiswaController@update')->name('update');
    Route::get('/siswa/{id}/delete', 'SiswaController@delete')->name('delete');
    Route::get('/siswa/{id}/profile', 'SiswaController@profile')->name('profile');
});

Route::group(['middleware' => ['auth', 'checkRole:admin,siswa']], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});
