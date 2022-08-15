@extends('layouts.master')
@section('title', 'Nueva Sucursal')
@section('header')
<h2>Agregar Sucursal</h2>
<hr>
@stop  

@section('content')
    <div class="row">
       <form action="/sucursales" method="POST">
        <div class="mb-3">
            <label for="nomSuc" class="form-label">Nombre Sucursal</label>
            <input type="text" class="form-control" name="nomSuc" id="nomSuc">
        </div>
        <button type="submit" class="btn btn-success">Agregar Sucursal</button>
       </form>
    </div>
@stop 
@section('footer')
@stop