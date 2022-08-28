<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\producto;
use App\Models\categoria;
use App\Models\prodsucursal;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
     public function index(Request $request){
      $texto=trim($request->get('texto'));
      $tipobus=$request->get('tipobus');

      if($texto == ""){
        $productos = Producto::get();
      } 
      else {
        if($tipobus == "1"){

        $productos = Producto::where('nomProd', 'LIKE', '%'.$texto."%")->get();
      }
      else
      {
        $productos = Producto::where('codProd', 'LIKE', '%'.$texto."%")->get();
      }
      }  
      
        return view('productos.listado',[
         'productos' => $productos
        ]);
     }

     public function create(){
      $categorias = Categoria::all();
        return view('productos.agregar', compact('categorias'));
     }

     public function store(Request $request){
      $this->validate($request, [
         'codProd' => 'required',
         'nomProd' => 'required',
         'imaProd' => 'required',
         'desProd' => 'required',
         'cate_id' => 'required',
         'preProd' => 'required'
      ]);

      $imaProd = $request->file('imaProd');

      if($imaProd){
        $imagen_path = time()."-".$imaProd->getClientOriginalName();
        \Storage::disk('images')->put($imagen_path, \File::get($imaProd));
      }

      $producto = new Producto();
      $producto->codProd = $request->codProd;
      $producto->nomProd = $request->nomProd;
      $producto->imaProd = $imagen_path;
      $producto->desProd = $request->desProd;
      $producto->cate_id = $request->cate_id;
      $producto->preProd = $request->preProd;
      $producto->save();

      $productos = Producto::get();
        return view('productos.listado',[
         'productos' => $productos
        ]);
      }

      public function delete($codProd){
          //Validación de existencia de producto
          $producto = Producto::where('codProd', $codProd)->get();

          if(\Storage::disk('images')->has($producto[0]->imaProd)){
              \Storage::disk('images')->delete($producto[0]->imaProd);           
          }

          //Eliminación de producto
          $productoEliminar = Producto::where('codProd', $codProd)->delete();
          $productos = Producto::get();
        
          return view('productos.listado',[
          'productos' => $productos
          ]);
      }

      public function update($codProd){
          //Traer Producto
          $producto = Producto::where('codProd', $codProd)->get();
          $prodsucursal = ProdSucursal::all();

          if(count($producto)>0){
            return view('productos.editar',compact('producto')
          );
          }else{
            return view('productos.error'
          );
          }

        
      }

      public function updateSave(Request $request){
        //Validación de datos
        $this->validate($request,[
          'nomProd' => 'required',
          'desProd' => 'required',
          //'precioProd' => 'required'
        ]);

        $imagen = $request->file('imaProd');

        if($imagen){
          $imagen_path = time()."-".$imagen->getClientOriginalName();
          \Storage::disk('images')->put($imagen_path, \File::get($imagen));
          Producto::where('codProd',$request->codProd)
          ->update([
            'nomProd' => $request->nomProd,
            'imaProd' => $imagen_path,
            'desProd' => $request->desProd,
            'preProd' => $request->preProd
          ]);

        }else{
          Producto::where('codProd',$request->codProd)
          ->update([
            'nomProd' => $request->nomProd,
            'desProd' => $request->desProd,
            'preProd' => $request->preProd
          ]);
        }

        $productos = Producto::get();
        return view('productos.listado',[
         'productos' => $productos
        ]);
      }

      public function getImagen($filename){
        $file = \Storage::disk('images')->get($filename);
        return new Response($file, 200);
      }
}
