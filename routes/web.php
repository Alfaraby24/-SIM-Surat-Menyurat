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
    return view('auths.login');
});

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => 'auth'], function(){
	Route::get('/dashboard','DashboardController@index');

	Route::get('/disposisi','DisposisiController@index');
	Route::post('/disposisi/create','DisposisiController@create');
	Route::get('/disposisi/{id}/edit', 'DisposisiController@edit');
	Route::post('/disposisi/{id}/update', 'DisposisiController@update');
	Route::get('/disposisi/{id}/delete' , 'DisposisiController@delete');

	Route::get('/sett','SettController@index');
	Route::post('/sett/create','SettController@create');
	Route::get('/sett/{id}/edit', 'SettController@edit');
	Route::post('/sett/{id}/update', 'SettController@update');
	Route::get('/sett/{id}/delete' , 'SettController@delete');

	Route::get('/klarifikasi','KlarifikasiController@index');
	Route::post('/klarifikasi/create','KlarifikasiController@create');
	Route::get('/klarifikasi/{id}/edit', 'KlarifikasiController@edit');
	Route::post('/klarifikasi/{id}/update', 'KlarifikasiController@update');
	Route::get('/klarifikasi/{id}/delete' , 'KlarifikasiController@delete');

	Route::get('/instansi','InstansiController@index');
	Route::post('/instansi/create','InstansiController@create');
	Route::get('/instansi/{id}/edit', 'InstansiController@edit');
	Route::post('/instansi/{id}/update', 'InstansiController@update');
	Route::get('/instansi/{id}/delete' , 'InstansiController@delete');

	Route::get('/surat_masuk','SuratMasukController@index');
	Route::post('/surat_masuk/create','SuratMasukController@create');
	Route::get('/surat_masuk/{id}/edit', 'SuratMasukController@edit');
	Route::post('/surat_masuk/{id}/update', 'SuratMasukController@update');
	Route::get('/surat_masuk/{id}/delete' , 'SuratMasukController@delete');

	Route::get('/suratkeluar','SuratkeluarController@index');
	Route::post('/suratkeluar/create','SuratkeluarController@create');
	Route::get('/suratkeluar/{id}/edit', 'SuratkeluarController@edit');
	Route::post('/suratkeluar/{id}/update', 'SuratkeluarController@update');
	Route::get('/suratkeluar/{id}/delete' , 'SuratkeluarController@delete');

});
