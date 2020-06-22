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

Route::get('/', 'SiteController@home');
Route::get('/about', 'SiteController@about');
Route::get('/contact', 'SiteController@contact');
Route::get('/register', 'SiteController@register');
Route::post('/postregister', 'SiteController@postregister');



Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => ['auth','checkRole:admin']], function(){
  Route::get('/mahasiswa','MahasiswaController@index');
  Route::post('/mahasiswa/create', 'MahasiswaController@create');
  Route::get('/mahasiswa/{id}/edit', 'MahasiswaController@edit');
  Route::post('/mahasiswa/{id}/update', 'MahasiswaController@update');
  Route::get('/mahasiswa/{id}/delete', 'MahasiswaController@delete');
  Route::get('/mahasiswa/{id}/profile', 'MahasiswaController@profile');
});

Route::group(['middleware' => ['auth','checkRole:admin,mahasiswa']], function(){
  Route::get('/dashboard', 'DashboardController@index');
});





