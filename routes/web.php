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

Route::get('/', function () { //hanya mengamenbalikan ke view welcome
    return view('welcome');
});
Route::get('about', function () { //return
    return view('about'); //view
});
Route::get('pesan', function () { //return
    return view('pesan'); //view yang dikembalikan
});
Route::post('pesan/kirim', function () { //post->mengambil data dari inputan  pesan
    return view('pesan_kirim'); //view yang dikembalikan
});
