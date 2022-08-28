@extends('layouts.master')
@section('title','Bienvenido!')

@section('header')

<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
    <h2>Bienvenido!</h2>
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
        <a href="productos">Registrar y Consultar Producto</a>
        </li>
        <li class="nav-item">
        <a href="sucursales">Crear Sucursal</a>
        </li>
        <li class="nav-item">
        <a href="asignarprodsuc">Asignar Productos a Sucursal </a>
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


@stop

@section('footer')
Lideres Inovadores
Sergio Vargas
Sebastian Zumelzu
Paloma Riquelme
Sebastian Figueroa
@stop