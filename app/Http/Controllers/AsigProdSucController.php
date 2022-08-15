<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sucursal;
use App\Models\producto;
use App\Models\prodsucursal;

class AsigProdSucController extends Controller
{
   public function index(){
         return view('asignarprodsuc.agregarasig');
     } 
        
   public function create(){             
        return view('asignarprodsuc.agregarasig');
     }

   public function createasignar(){
   $productos = Producto::all();
   return view('asignarprodsuc.agregarasig', compact('productos'));
   }

   public function store(Request $request){
        $this->validate($request, [
           'prod_id' => 'required',
           'suc_id' => 'required',
           'precioProd' => 'required',
           'stockProd' => 'required'
        ]);
  
        $prodsucursal = new ProdSucursal();
        $prodsucursal->prod_id = $request->prod_id;
        $prodsucursal->suc_id = $request->suc_id;
        $prodsucursal->precioProd = $request->precioProd;
        $prodsucursal->stockProd = $request->stockProd;
        $prodsucursal->save();
  
        $prodsucursal = prodSucursal::get();
          return view('asignarprodsuc.agregarasig',[
           'productossucursales' => $prodSucursales
          ]);
        }   
}