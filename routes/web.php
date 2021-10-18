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
    return view('menix');
});
Route::get('/index', function () {
    return view('plantilla');
});

Route::get('/productos', function () {
    return view('productos');
})->name('productos');
Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');
