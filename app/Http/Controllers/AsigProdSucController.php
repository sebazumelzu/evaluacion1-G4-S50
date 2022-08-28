<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sucursal;
use App\Models\producto;
use App\Models\prodsucursal;

class AsigProdSucController extends Controller
{
   public function index(){
    $productos = Producto::all();
    $sucursales = Sucursal::all();
    $prodsucursal = ProdSucursal::all();
    return view('asignarprodsuc.agregarasig', compact('productos', 'sucursales'),[
      'prodsucursal' => $prodsucursal
      ]);
     } 
   
   public function create(){       
        return view('asignarprodsuc.agregarasig');
     }

   public function store(Request $request){       
      $this->validate($request, [
           'prod_id' => 'required',
           'suc_id' => 'required',
           'stockProd' => 'required'
        ]);

        $prodsucursal = new ProdSucursal();
        $prodsucursal->prod_id = $request->prod_id;
        $prodsucursal->suc_id = $request->suc_id;
        $prodsucursal->stockProd = $request->stockProd;
        $prodsucursal->save();
  
        $productos = Producto::all();
        $sucursales = Sucursal::all();
        $prodsucursal = ProdSucursal::all();
        return view('asignarprodsuc.agregarasig', compact('productos', 'sucursales'),[
          'prodsucursal' => $prodsucursal
          ]);
        }
}