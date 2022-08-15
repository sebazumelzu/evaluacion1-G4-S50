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

Route::get('/', 'App\Http\Controllers\ProductosController@index');

Route::resource('productos', 'App\Http\Controllers\ProductosController');

Route::get('/', 'App\Http\Controllers\SucursalesController@index');

Route::resource('sucursales', 'App\Http\Controllers\SucursalesController');

Route::resource('asignarprodsuc', 'App\Http\Controllers\AsigProdSucController');

// <<<<<<< HEAD
// Route::get('/registrarprod', function () {
//     return view('registrarprod');
// });

// Route::get('/asignarprod', function () {
//     return view('asignarprod');
// });

// Route::get('/consultarprod', function () {
//     return view('consultarprod');
// });

// Route::get('/darbajaprod', function () {
//     return view('darbajaprod');
// });

// Route::get('/actualizarprod', function () {
//     return view('actualizarprod');
// });

// Route::get('/login', function () {
//     return view('login');
// });
// =======
// Route::get('/index', function(){
//     return view('index');
// });

// Route::get('/login', 'App\Http\Controllers\productoController@login')->name('acceder');

// Route::get('/registrarProducto', 'App\Http\Controllers\productoController@registrarProducto')->name('registrar Producto');

// Route::get('/asignarProducto', 'App\Http\Controllers\productoController@asignarProducto')->name('asignar');

// Route::get('/consultarProducto', 'App\Http\Controllers\productoController@consultarProducto')->name('consultar');

// Route::get('/eliminarProducto', 'App\Http\Controllers\productoController@eliminarProducto')->name('eliminar');

// Route::get('/actualizarProducto', 'App\Http\Controllers\productoController@actualizarProducto')->name('actualizar');
// >>>>>>> a3f937e022b3e20f9c7dc1038509043c23c3bebd

// Route::resource('productos', 'App\Http\Controllers\ProductosController');