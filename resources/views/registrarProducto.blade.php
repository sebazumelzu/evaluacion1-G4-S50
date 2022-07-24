<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>

Registrar Producto
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
</html> 