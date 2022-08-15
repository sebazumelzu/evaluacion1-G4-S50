@extends('layouts.master')
@section('title', 'Asignar Producto a Sucursal')
@section('header')
<h2>Asignar Producto</h2>
<hr>
@stop  

@section('content')
    <div class="row">
       <form action="/productos" method="POST">
        <div class="mb-3">
            <label for="prod_id" class="form-label">ID Producto</label>
            <input type="text" class="form-control" name="prod_id" id="prod_id">
        </div>
        <div class="mb-3">
            <label for="suc_id" class="form-label">ID Sucursal</label>
            <input type="text" class="form-control" name="suc_id" id="suc_id">
        </div>
        <div class="mb-3">
            <label for="precioProd" class="form-label">Precio producto</label>
            <input type="text" class="form-control" name="precioProd" id="precioProd">
        </div>
        <div class="mb-3">
            <label for="stockProd" class="form-label">Categoría del Producto</label>
            <input type="text"class="form-control" name="stockProd" id="stockProd">
        </div>
        <button type="submit" class="btn btn-success">Asignar Producto a Sucursal</button>
       </form>
    </div>
@stop 
@section('footer')
@stop