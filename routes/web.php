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
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', 'RegisterController@selamat');
Route::post('/test', 'RegisterController@selamat');

Route::get('/halo/{nama}', function ($nama) {
    return "halo $nama";
});


Route::get('/form', 'RegisterController@form');

Route::get('/sapa', 'RegisterController@sapa');
Route::post('/sapa', 'RegisterController@sapa_post');

Route::get('/halaman', 'RegisterController@awal');
Route::post('/halaman', 'RegisterController@awal');