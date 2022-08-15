<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sucursal;

class SucursalesController extends Controller
{
     public function index(){
      $sucursales = Sucursal::get();
        return view('sucursales.listadosuc',[
         'sucursales' => $sucursales
        ]);
     }

     public function create(){
        return view('sucursales.agregarsuc');
     }

     public function store(Request $request){
      $this->validate($request, [
         'nomSuc' => 'required'
      ]);

      $sucursal = new Sucursal();
      $sucursal->nomSuc = $request->nomSuc;
      $sucursal->save();

      $sucursales = Sucursal::get();
        return view('sucursales.listadosuc',[
         'sucursales' => $sucursales
        ]);
      }

      public function createasucprod(){
        return view('asignarprodsuc.agregarasig');
     }

     public function storesucprod(Request $request){
        $this->validate($request, [
           'prod_id' => 'required',
           'suc_id' => 'required',
           'precioProd' => 'required',
           'stockProd' => 'required'
        ]);
  
        $prodsucursal = new prodSucursal();
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