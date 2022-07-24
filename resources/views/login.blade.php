@extends('layouts.master')
@section('title','Usuario')

@section('header')
<h2>Datos:</h2>
@stop

@section('content')
Ingrese su nombre de usuario y contraseña:<br>
<hr>


<div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Usuario: </label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
    </div>

<div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Contraseña:</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
    </div>
@stop