@extends('layouts.master')
@section('title', 'Nuevo Producto')
@section('header')
<h2>Agregar Producto</h2>
<hr>
@stop  

@section('content')
    <div class="row">
       <form action="/productos" method="POST">
        <div class="mb-3">
            <label for="codProd" class="form-label">Código Producto</label>
            <input type="text" class="form-control" name="codProd" id="codProd">
        </div>
        <div class="mb-3">
            <label for="nomProd" class="form-label">Nombre Producto</label>
            <input type="text" class="form-control" name="nomProd" id="nomProd">
        </div>
        <div class="mb-3">
            <label for="desProd" class="form-label">Descripción Producto</label>
            <textarea name="desProd" class="form-control" id="desProd" cols="30" rows="10"></textarea>
        </div>
        <div class="mb-3">
            <label for="cate_id" class="form-label">Ctaegoría del Producto</label>
            <input type="text"class="form-control" name="cate_id" id="cate_id">
        </div>
        <button type="submit" class="btn btn-success">Agregar Producto</button>
       </form>
    </div>
@stop 
@section('footer')
@stop