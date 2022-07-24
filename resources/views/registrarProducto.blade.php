@extends('layouts.master')
@section('title','Registrar Producto')

@section('header')
<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
    <h2>Registrar Productos</h2>
    </div>
    <div class="col">
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a href="{{ route('acceder')}}">Ingresar </a><br>
        </li>
        <li class="nav-item">
        <a href="{{ route('registrar Producto')}}">Registrar Producto</a>
        </li>
        <li class="nav-item">
        <a href="{{ route('asignar')}}">Asignar </a>
        </li>
        <li class="nav-item">
        <a href="{{ route('consultar')}}">Consultar </a>
        </li>
        <li class="nav-item">
        <a href="{{ route('eliminar')}}">Eliminar </a>
        </li>
        <li class="nav-item">
        <a href="{{ route('actualizar')}}">Actualizar </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    </div>
</div>
@stop

@section('content')
Ingrese los siguientes datos:
<hr>

<form method="POST" action="{{ url('/guardarProducto') }}">
  <div class="mb-2">
    <label for="codigoUnico" class="form-label">Codigo Unico:</label>
    <input type="number" class="form-control" id="codigoUnico" name="codigoUnico">
  </div>
  <div class="mb-2">
    <label for="nombre" class="form-label">Nombre del producto:</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
  </div>
  <select class="form-select" aria-label="categoria">
    <option selected>Seleccione la categoria</option>
    <option value="1">Categoria 1</option>
    <option value="2">Categoria 2</option>
    <option value="3">Categoria 3</option>
  </select>
  <select class="form-select" aria-label="sucursal">
    <option selected>Seleccione la sucursal</option>
    <option value="1">Talca</option>
    <option value="2">Paris</option>
    <option value="3">Londres</option>
  </select>
  <div class="mb-2">
    <label for="descripcion" class="form-label">Descripcion:</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion">
  </div>
  <div class="mb-2">
    <label for="cantidad" class="form-label">Cantidad:</label>
    <input type="number" class="form-control" id="cantidad" name="cantidad">
  </div>
  <div class="mb-2">
    <label for="precio" class="form-label">Precio:</label>
    <input type="number" class="form-control" id="precio" name="precio">
  </div>
  
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
  @stop

