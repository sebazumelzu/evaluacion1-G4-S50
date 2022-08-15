@extends('layouts.master')
@section('title', 'Lista de productos')
@section('header')
<h2>Listado de productos</h2>
<hr>
@stop  

@section('content')
    <div class="row">
        @foreach($productos as $producto)
        <div class="col-3">
        <div class="card" style="width: 18rem;">
                <div class="card-body">
                        <h5 class="card-title">{{ $producto->nomProd}</h5>
                        <p class="card-text">{{ $producto->desProd}</p>
                        <a href="#" class="btn btn-primary">Disponibilidad en sucursales</a>
                    </div>
               </div>
        </div>
        @endforeach
    </div>
@stop 
@section('footer')
<a href="productos/create" type="button" class="btn btn-secondary"> Agregar producto</a>
@stop
<br> 