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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/mahasiswa','MahasiswaController@index');
Route::get('/mahasiswa/create','MahasiswaController@create');
Route::post('/mahasiswa/store','MahasiswaController@store');
Route::resource('/Students', 'StudentsController@index');
