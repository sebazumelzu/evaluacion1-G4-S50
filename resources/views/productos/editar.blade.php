@extends('layouts.master')
@section('title', 'Editar Producto')
@section('header')
<h2>Editar Producto</h2>
<hr>
@stop  

@section('content')
    <div class="row">
       <form action="/updateProducto" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nomProd" class="form-label">Nombre Producto</label>
            <input type="text" class="form-control" name="nomProd" id="nomProd" value="{{ $producto[0]->nomProd }}">
            <input type="hidden" class="form-control" name="codProd" id="codProd" value="{{ $producto[0]->codProd }}">
        </div>
        <div class="mb-3">
            <label for="imaProd" class="form-label">Imagen</label>
            <input type="file" class="form-control" name="imaProd" id="imaProd" accept=".png, .jpg, .jpeg">
        </div>
        <div class="mb-3">
            <label for="desProd" class="form-label">Descripción Producto</label>
            <textarea name="desProd" class="form-control" id="desProd" cols="30" rows="10" value="{{ $producto[0]->desProd }}"></textarea>
        </div>
        <div class="mb-3">
            <label for="preProd" class="form-label">Precio Producto</label>
            <input type="text" class="form-control" name="preProd" id="preProd" value="{{ $producto[0]->preProd }}">
        </div>        
        <button type="submit" class="btn btn-success">Editar Producto</button>
       </form>
    </div>
@stop 
@section('footer')
<a href="index" type="button" class="btn btn-secondary"> Menú Principal</a>
@stop