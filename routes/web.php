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

Route::resource('kontak','Kontak');


Route::get('/', function () {
    return view('index');
});


Route::get('login', function () {
    return view('login');
});





Route::group(['middleware' => ['auth']], function () {
    Route::get('/halaman-kedua', function () {
        return view('halamandua');
    });
    
    
    Route::get('/tambah', function () {
        return view('kontak_create');
    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/login', 'HomeController@index')->name('home');
