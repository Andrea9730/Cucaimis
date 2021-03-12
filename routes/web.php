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
    return view('welcome');
});
Route::get('/donacion', function () {
    return view('Donacion_1.index');
});
Route::get('/donacion/nuevo_proceso', function () {
    return view('Donacion_1.create');
});
Route::get('/donacion/editar', function () {
    return view('Donacion_1.edit');
});
Route::get('/valoracion/nueva_val', function () {
    return view('Valoracion.create');
});
