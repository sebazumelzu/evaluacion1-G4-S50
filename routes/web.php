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

Route::get('/', function(){
    return view('index');
});

Route::get('/index', function(){
    return view('index');
});

Route::get('/login', 'App\Http\Controllers\productoController@login')->name('acceder');

Route::get('/registrarProducto', 'App\Http\Controllers\productoController@registrarProducto')->name('registrar Producto');

Route::get('/asignarProducto', 'App\Http\Controllers\productoController@asignarProducto')->name('asignar');

Route::get('/consultarProducto', 'App\Http\Controllers\productoController@consultarProducto')->name('consultar');

Route::get('/eliminarProducto', 'App\Http\Controllers\productoController@eliminarProducto')->name('eliminar');

Route::get('/actualizarProducto', 'App\Http\Controllers\productoController@actualizarProducto')->name('actualizar');