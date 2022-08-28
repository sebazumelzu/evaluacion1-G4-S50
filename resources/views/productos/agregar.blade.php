@extends('layouts.master')
@section('title', 'Nuevo Producto')
@section('header')
<h2>Agregar Producto</h2>
<hr>
@stop  

@section('content')
    <div class="row">
       <form action="/productos" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="codProd" class="form-label">Código Producto</label>
            <input type="text" class="form-control" name="codProd" id="codProd">
        </div>
        <div class="mb-3">
            <label for="nomProd" class="form-label">Nombre Producto</label>
            <input type="text" class="form-control" name="nomProd" id="nomProd">
        </div>
        <div class="mb-3">
            <label for="imaProd" class="form-label">Imagen</label>
            <input type="file" class="form-control" name="imaProd" id="imaProd" accept=".png, .jpg, .jpeg">
        </div>
        <div class="mb-3">
            <label for="desProd" class="form-label">Descripción Producto</label>
            <textarea name="desProd" class="form-control" id="desProd" cols="30" rows="10"></textarea>
        </div>
        <div class="mb-3">
        <label for="cate_id" class="form-label">Categoría del Producto</label>
            <select name= "cate_id"class="form-select" aria-label="Default select example">
                <option value="">--Escoja una categoría--</option>
                @foreach ($categorias as $categoria)
                <option value="{{ $categoria['id'] }}">{{ $categoria['nomCat'] }} - Código: "{{ $categoria['id'] }}"</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="preProd" class="form-label">Precio Producto</label>
            <input type="text" class="form-control" name="preProd" id="preProd">
        </div>
        <button type="submit" class="btn btn-success">Agregar Producto</button>
       </form>
    </div>
@stop 
@section('footer')
<a href="index" type="button" class="btn btn-secondary"> Menú Principal</a>
@stop