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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']],
function (){
Route::resource('beranda', 'BerandaController');
Route::resource('galeri', 'GaleriController');
Route::resource('fakultas', 'FakultasController');
Route::resource('kategori', 'KategoriController');
Route::resource('berita', 'BeritaController');
});
Route::get('blog','FrontController@blog');
Route::get('blog/{id}', array('as' => 'singleblog', 'uses' =>'FrontController@singleblog'));
