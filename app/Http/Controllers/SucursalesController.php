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
}