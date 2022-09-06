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

Route::get('/', function () {
    return view('frontview.index');
});

Route::get('/index', function () {
    return view('frontview.index');
});

Route::get('/account', function () {
    return view('frontview.account');
});

Route::get('/produkdetail', function () {
    return view('frontview.produkdetail');
});

Route::get('/produk', function () {
    return view('frontview.produk');
});

Route::get('admin', function () {
    return view('admin.index');
});

Route::get('/kategori', function () {
    return view('admin.kategori.index');
});

Route::get('/barang', function () {
    return view('admin.produk.index');
});

Route::get('/logout', function () {
    return view('frontview.index');
});