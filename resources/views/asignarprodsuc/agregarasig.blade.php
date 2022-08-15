@extends('layouts.master')
@section('title', 'Asignar Producto a Sucursal')
@section('header')
<h2>Asignar Producto</h2>
<hr>
@stop  

@section('content')
    <div class="row">
       <form action="/asignarprodsuc" method="POST">
        <div class="mb-3">
            <select name= "codProd"class="form-select" aria-label="Default select example">
                <!-- <option value="">--Escoja un producto--</option>
                @foreach ($productos as $producto)
                <option value="{{ $producto['nomProd'] }}">{{ $producto['codProd'] }}</option>
                @endforeach -->
            </select>
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
            <label for="stockProd" class="form-label">Stock del producto</label>
            <input type="text"class="form-control" name="stockProd" id="stockProd">
        </div>
        <button type="submit" class="btn btn-success">Asignar Producto a Sucursal</button>
       </form>
    </div>
@stop 
@section('footer')
@stop