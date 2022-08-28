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
            <label for="prod_id" class="form-label">Código Producto</label>
            <select name= "prod_id"class="form-select" aria-label="Default select example">
                <option value="">--Escoja un producto--</option>
                @foreach ($productos as $producto)
                <option value="{{ $producto['id'] }}">{{ $producto['nomProd'] }} - Código: "{{ $producto['codProd'] }}"</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="suc_id" class="form-label">ID Sucursal</label>
            <select name= "suc_id"class="form-select" aria-label="Default select example">
                <option value="">--Escoja una Sucursal--</option>
                @foreach ($sucursales as $sucursal)
                <option value="{{ $sucursal['id'] }}">{{ $sucursal['nomSuc'] }} - Código: "{{ $sucursal['id'] }}"</option>
                @endforeach
            </select>
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
<a href="index" type="button" class="btn btn-secondary"> Menú Principal</a>
@stop