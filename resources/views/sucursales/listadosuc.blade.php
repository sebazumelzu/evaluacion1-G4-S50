@extends('layouts.master')
@section('title', 'Lista de sucursales')
@section('header')
<h2>Listado de sucursales</h2>
<hr>
@stop  

@section('content')
    <div class="row">
        @foreach($sucursales as $sucursal)
        <div class="col-3">
        <div class="card" style="width: 18rem;">
                <div class="card-body">
                        <h5 class="card-title">Nombre de sucursal: {{ $sucursal->nomSuc}}</h5>
                    </div>
               </div>
        </div>
        @endforeach
    </div>
@stop 
@section('footer')
<a href="sucursales/create" type="button" class="btn btn-secondary"> Agregar sucursal</a>
@stop
<a href="index" type="button" class="btn btn-secondary"> Menú Principal</a>
<br> 