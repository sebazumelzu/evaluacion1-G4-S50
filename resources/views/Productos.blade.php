@extends('layouts.master')
@section('title','Productos ')

@section('header')
@stop

@section('content')
<a href="productos/create" type="button" class="btn btn-warning">Agregar producto</a>
<br><br>
<div class="row">
        @foreach($productos as $producto)
        <div class="col-3">
            <div class="card" style="width: 18rem;">
              <img src="https://www.latercera.com/resizer/PyRyhxgZA0KkLQt6yTiYQ7TlaMQ=/900x600/smart/arc-anglerfish-arc2-prod-copesa.s3.amazonaws.com/public/PHIHC6L7XVFARAKZXNDOSQS23Y.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Producto: {{ $producto->nomProd }}</h5>
                <p class="card-text">Codigo: {{ $producto->codProd }}</p>
                <p class="card-text">Descripcion: {{ $producto->desProd }}</p>
                <p class="card-text">Categoria: {{ $producto->cate_id}}</p>
                <a href="#" class="btn btn-danger">Eliminar</a>
                <a href="#" class="btn btn-secondary">Editar</a>
              </div>
            </div>
        </div>
        @endforeach
      </div>
            
@stop

@section('footer')
@stop