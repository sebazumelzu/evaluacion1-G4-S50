@extends('layouts.master')
@section('title','Bienvenido!')

@section('header')
<h2>Bienvenido!</h2>
@stop

@section('content')
<hr>
¿Qué desea hacer?
<a href="{{ route('acceder')}}">Acceder </a><br>
<hr>
Registrar Producto: 
<a href="{{ route('registrar Producto')}}">Registrar </a><br>
Asignar Producto a una sucursal:
<a href="{{ route('asignar')}}">Asignar </a><br>
Consultar producto:
<a href="{{ route('consultar')}}">Consultar </a><br>
Eliminar producto:
<a href="{{ route('eliminar')}}">Eliminar </a><br>
Actualizar producto:
<a href="{{ route('actualizar')}}">Actualizar </a><br>
@stop