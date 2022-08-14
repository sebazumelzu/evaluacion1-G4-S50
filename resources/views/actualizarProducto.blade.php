@extends('layouts.master')
@section('title','Actualizacion de producto')

@section('header')
<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
    <h2>Actualizar Productos</h2>
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
        <a href="#">Ingresar </a><br>
        </li>
        <li class="nav-item">
        <a href="productos/create">Registrar Producto</a>
        </li>
        <li class="nav-item">
        <a href="#">Asignar </a>
        </li>
        <li class="nav-item">
        <a href="#">Consultar </a>
        </li>
        <li class="nav-item">
        <a href="#">Eliminar </a>
        </li>
        <li class="nav-item">
        <a href="#">Actualizar </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    </div>
</div>
@stop
@section('content')
<div class="mb-3">
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre Producto">
</div>
<div class="mb-2">
    <input type="number" class="form-control" id="codigoUnico" name="codigoUnico" placeholder="Precio Producto">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Descripción Producto</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>

<button type="submit" class="btn btn-primary">Actualizar</button>

<hr>
@stop