@extends('layouts.master')
@section('title','Consultar Producto')

@section('header')
<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
    <h2>Stock de Productos</h2>
    </div>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="/">Inicio</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Ingresar</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Asignar</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Consultar</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Eliminar</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Actualizar</a>
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
<input type="number" class="form-control" id="codigoUnico" name="codigoUnico" placeholder="Codigo">
</div> 
<div class="mb-3">
<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre del Producto">
</div>   
<div class="mb-3">
<label for="codigoUnico" class="form-label">Opcional:</label>
<select class="form-select" aria-label="sucursal">
  <option selected>Seleccione la sucursal</option>
  <option value="1">Talca</option>
  <option value="2">Paris</option>
  <option value="3">Londres</option>
</select>
</div>
<div class="mb-3">
  <button type="submit" class="btn btn-primary">Consultar</button>
</div>


<hr>
@stop