<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;

class ProductosController extends Controller
{
     public function index(){
      $productos = Producto::get();

        return view('Productos',[
            'productos' => $productos
        ]);
     }

     public function create(){
         return view('agregar');
     }

     public function store(Request $request){

         $this->validate($request,[
            'nomProd' => 'required',
            'codProd' => 'required',
            'desProd' => 'required',
            'cate_id' => 'required'
         ]);

         $producto = new Producto();
         $producto->nomProd = $request->nomProd;
         $producto->codProd = $request->codProd;
         $producto->desProd = $request->desProd;
         $producto->cate_id = $request->cate_id;
         $producto->save();

         $productos = Producto::get();

        return view('Productos',[
            'productos' => $productos
        ]);
     }

}
