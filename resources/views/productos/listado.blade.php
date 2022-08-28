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
                <img src="{{ url('miniatura/'.$producto->imaProd) }}" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title">Nombre: {{ $producto->nomProd }}</h5>
                        <h5 class="card-title">Código: {{ $producto->codProd }}</h5>
                        <h5 class="card-title">Categoría: {{ $producto->cate_id }}</h5>
                        <p class="card-text">Descripción: {{ Str::limit($producto->desProd,150) }}</p>
                        <p class="card-text">Precio: {{ $producto->preProd }}</p>
                        <p class="card-text text-muted">{{ FormatTime::LongTimeFilterCreated($producto->created_at) }}</p>
                        <p class="card-text text-muted">{{ FormatTime::LongTimeFilterUpdated($producto->updated_at) }}</p>
                        <a href="/updateProducto/{{ $producto->codProd }}" class="btn btn-primary">Actualizar</a>
                        <a href="/deleteProducto/{{ $producto->codProd }}" class="btn btn-danger">Eliminar</a>
                    </div>
               </div>
        </div>
        @endforeach
    </div>
    <br> 
    <h4>Búsqueda de productos</h4>   
    <div class="row">
       <div class="col-xl-12">
        <form action="/productos">
            <div class="form-row">
                <div class="col-sm-4 my-1">
                <input type="radio" name="tipobus" id="byname" value="1"/>
                <label for="byname">Búsqueda por nombre</label>
                <input type="radio" name="tipobus" id="bycode" value="2"/>
                <label for="bycode">Búsqueda por código</label>
                    <input type="text"class="form-control" name="texto">
                </div>
                <div class="col-auto my-2">
                    <input type="submit" class="btn btn-primary" value="Buscar">
                </div>
            </div>
        </form>
       </div>
    </div>

    <br> 
@stop 
@section('footer')
<a href="productos/create" type="button" class="btn btn-secondary"> Agregar producto</a>
<a href="index" type="button" class="btn btn-secondary"> Menú Principal</a>
@stop
<br> 