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
Route::get('administrator','AdminController@viewIndex')->middleware('administrator');

/*TENAN*/
Route::get('administrator/tenan','TenanController@viewIndex')->middleware('administrator');
Route::get('administrator/tenan/tambah','TenanController@viewAddTenan')->middleware('administrator');
Route::post('administrator/tenan/tambah','TenanController@postTenan')->middleware('administrator');

Route::get('administrator/tenan/{id}','TenanController@viewEditTenan')->where('id', '[0-9]+')->middleware('administrator');
Route::post('administrator/tenan/edit','TenanController@postEditTenan')->middleware('administrator');

Route::get('administrator/tenan/hapus/{id}','TenanController@viewDeleteTenan')->where('id', '[0-9]+')->middleware('administrator');
Route::get('administrator/tenan/delete/{id}','TenanController@deleteTenan')->where('id', '[0-9]+')->middleware('administrator');

/*BERITA PROMO*/
Route::get('administrator/berita-promo','BeritaController@viewIndex')->middleware('administrator');
Route::get('administrator/berita-promo/tambah','BeritaController@viewAddBerita')->middleware('administrator');
Route::post('administrator/berita-promo/tambah','BeritaController@postBerita')->middleware('administrator');

Route::get('administrator/berita-promo/{id}','BeritaController@viewEditBerita')->where('id', '[0-9]+')->middleware('administrator');
Route::post('administrator/berita-promo/edit','BeritaController@postEditBerita')->middleware('administrator');

Route::get('administrator/berita-promo/hapus/{id}','BeritaController@viewDeleteBerita')->where('id', '[0-9]+')->middleware('administrator');
Route::get('administrator/berita-promo/delete/{id}','BeritaController@deleteBerita')->where('id', '[0-9]+')->middleware('administrator');

/*PROFIL*/
Route::get('administrator/profil','ProfileController@viewIndex')->middleware('administrator');
Route::post('administrator/profil','ProfileController@postProfil')->middleware('administrator');
Route::post('administrator/kontak','ProfileController@postKontak')->middleware('administrator');

/*AKUN*/
Route::get('administrator/akun','AkunController@viewIndex')->middleware('administrator');
Route::post('administrator/akun','AkunController@postAkun')->middleware('administrator');



Route::get('/','HomePageController@viewBeranda');
Route::get('tenan/{kategori}','HomePageController@viewTenan');
Route::get('tenan/populer/{id}','HomePageController@populerTenan');
Route::get('profil','HomePageController@viewProfil');
Route::get('jadwal','HomePageController@viewJadwal');
Route::get('news-promo/{id}','HomePageController@viewBerita');


Route::get('suka','HomePageController@suka');
Route::get('tidak-suka','HomePageController@tidakSuka');


Route::get('login','Auth\LoginController@viewLogin');
Route::post('login','Auth\LoginController@postLogin');
Route::get('logout','Auth\LoginController@logout');