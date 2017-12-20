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

$controller  = function () {
    return view('welcome');
};

Route::get('/', $controller);

Route ::get ('/siswa', "SiswaController@index");

Route::get('/siswa/add', "SiswaController@add");
Route::post('/siswa/add', "SiswaController@add");

Route::get('siswa/edit/{id_siswa}', "SiswaController@edit");
Route::post('siswa/edit/{nama_siswa}', "SiswaController@edit");

Route::get('/siswa/view/{id_siswa}', "SiswaController@view");
//Route::get('/siswa/view/{nama_siswa}', "SiswaController@view");

Route::post('/siswa/delete', "SiswaController@delete");

Route::get('/media', "MediaController@index");
Route::get('/media/upload', "MediaController@upload");
Route::post('/media/upload', "MediaController@upload");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
