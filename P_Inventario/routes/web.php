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
    return view('Home');
})->name('/');

Route::get('Actualizar', function () {
    return view('Actualizar');
})->name('Actualizar');

Route::get('Mostrar', function () {
    return view('Mostrar');
})->name('Mostrar');

Route::get('Añadir', function () {
    return view('Añadir');
})->name('Añadir');

