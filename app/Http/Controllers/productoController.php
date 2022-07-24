<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productoController extends Controller
{
    public function login(){
        return view('login');
    }

    public function registrarProducto(){
        return view('registrarProducto');
    }

    public function asignarProducto(){
        return view('asignarProducto');
    }

    public function consultarProducto(){
        return view('consultarProducto');
    }

    public function eliminarProducto(){
        return view('eliminarProducto');
    }

    public function actualizarProducto(){
        return view('actualizarProducto');
    }

}
