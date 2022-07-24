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

    public function guardarProducto(Request $request){
        return "Codigo Unico: ". $request->input("codigoUnico").
        ", Nombre: ". $request->input("nombre").
        ", Descripcion: ". $request->input("descripcion").
        ", Cantidad: ". $request->input("cantidad").
        ", Precio: ". $request->input("precio");
    }

}
