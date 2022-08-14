@extends('layouts.master')
@section('title','Asignar un producto')

@section('header')
<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
    <h2>Asignar Productos</h2>
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
      <label for="exampleFormControlInput1" class="form-label">Nombre del producto</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>
<div class="mb-3">
      <select class="form-select" aria-label="sucursal">
    <option selected>Seleccione la sucursal</option>
    <option value="1">Norte</option>
    <option value="2">Centro</option>
    <option value="3">Sur</option>
  </select>
</div>
<div class="mb-3">
  <button type="submit" class="btn btn-primary">Asignar</button>
</div>

<hr>
@stop
