@extends('layouts.master')
@section('title','Registrar Producto')

@section('header')
<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
    <h2>Stock de Productos</h2>
    </div>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="index">Inicio</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Ingresar</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="productos/create">Registrar Productos</a>
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
<div class="row">
        @foreach($producto as $productos)
        <div class="col-3">
            <div class="card" style="width: 18rem;">
              <img src="https://www.latercera.com/resizer/PyRyhxgZA0KkLQt6yTiYQ7TlaMQ=/900x600/smart/arc-anglerfish-arc2-prod-copesa.s3.amazonaws.com/public/PHIHC6L7XVFARAKZXNDOSQS23Y.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Producto: {{ $productos->nomProd }}</h5>
                <p class="card-text">Codigo: {{ $productos->codProd }}</p>
                <p class="card-text">Descripcion: {{ $productos->desProd }}</p>
                <p class="card-text">Categoria: {{ $productos->cate_id}}</p>
              </div>
            </div>
        </div>
        @endforeach
      </div>
            
@stop

@section('footer')
@stop

