@extends('layouts.master')
@section('title','Bienvenido!')

@section('header')
@stop

@section('content')
<img src="https://infopymes.info/wp-content/uploads/2022/01/591685b8d83fef9f1ed66fcd1db6.jpg" class="rounded mx-auto d-block" alt="...">
@stop

@section('footer')
<footer class="text-center text-lg-start bg-light text-muted">
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <div class="me-5 d-none d-lg-block">
      <span>Contactate con nosotros:</span>
    </div>


    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    
    </section>

  <section class="">
    <div class="container text-center text-md-start mt-5">
      <div class="row mt-3">
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">Stock de Productos</h6>
          <p>
            Nuestra compañia esta compuesta por los mejores ingenieros y dueños de grandes ideas:
          </p>
          <p>
          Lideres Inovadores:
          </p>
          <p>Desarrollador de Software Sergio Vargas</p>
          <p>Director de Tegnologia Sebastian Zumelzu</p>
          <p>Diseñador Grafico Digital Paloma Riquelme</p>
          <p>Especialista en Big Data Sebastian Figueroa</p>
        </div>


        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Productos
          </h6>
          <p>
            <a href="#!" class="text-reset">Paltas</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Manzanas</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Detergentes</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Links de Retail
          </h6>
          <p>
            <a href="#!" class="text-reset">Ingresar</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Registrar Productos</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Asignar</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Consultar</a>
          </p>
        </div>

        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

          <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
          <p><i class="fas fa-home me-3"></i> Santiago, Los Orientales, 14384 Chile</p>
          <p><i class="fas fa-phone me-3"></i> + 569 82828282</p>
          <p><i class="fas fa-print me-3"></i> + 569 93939393</p>
        </div>

      </div>

    </div>
  </section>


  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="#">StockProductos.com</a>
  </div>

</footer>
@stop