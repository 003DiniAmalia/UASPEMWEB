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

Route::get('home', function () {
    return view('main');
});
Route::get('main', function () {
    return view('main');
});
Route::get('tanaman', function () {
    return view('tanaman');
});
Route::get('kaktus', function () {
    return view('kaktus');
});
Route::get('mawar', function () {
    return view('mawar');
});
Route::get('anggrek', function () {
    return view('anggrek');
});
Route::get('daun', function () {
    return view('daun');
});
Route::get('tipsntrik', function () {
    return view('tipsntrik');
});
Route::get('perlengkapan', function () {
    return view('perlengkapan');
});



