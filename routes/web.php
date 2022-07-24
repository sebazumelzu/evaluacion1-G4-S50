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
    return view('welcome');
});

Route::get('/registrarprod', function () {
    return view('registrarprod');
});

Route::get('/asignarprod', function () {
    return view('asignarprod');
});

Route::get('/consultarprod', function () {
    return view('consultarprod');
});

Route::get('/darbajaprod', function () {
    return view('darbajaprod');
});

Route::get('/actualizarprod', function () {
    return view('actualizarprod');
});

Route::get('/login', function () {
    return view('login');
});
