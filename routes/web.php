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
//tamara los 3
Route::get('/', function () {
    return view('formulario');
});

Route::get('/menor', function () {
    return view('menor');
});

Route::post('/comprobarEdad', 'ComprobarEdad@comprobarEdad');