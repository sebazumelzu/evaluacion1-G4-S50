<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;

class ProductosController extends Controller
{
     public function index(){
      $productos = Producto::get();
        return view('productos.listado',[
         'productos' => $productos
        ]);
     }

     public function create(){
        return view('productos.agregar');
     }

     public function store(Request $request){
      $this->validate($request, [
         'codProd' => 'required',
         'nomProd' => 'required',
         'desProd' => 'required',
         'cate_id' => 'required'
      ]);

      $producto = new Producto();
      $producto->codProd = $request->codProd;
      $producto->nomProd = $request->nomProd;
      $producto->desProd = $request->desProd;
      $producto->cate_id = $request->cate_id;
      $producto->save();

      $productos = Producto::get();
        return view('productos.listado',[
         'productos' => $productos
        ]);
      }
}
