@extends('layouts.master')

@section('pageTitle','Principal')

@section('content')
<br><br><br><br><br><br><br>
@if (Auth::user()->role_id==1)
  <div class="card-container light-font">
    <div class="summary-card green-color">
      <div class="card-icon">
        <i class="fas fa-dollar-sign fa-5x"></i>
      </div>
      <div class="card-content">
        <div class="title">
          <h1 class="display-7"><center>Ganancias del dia anterior</center></h1>
        </div>
        <div class="content">
          <h4 class="text-center"><b>@yield('ganDa')</b></h4>
        </div>
      </div>
    </div>
    <div class="summary-card bluue-color">
      <div class="card-icon">
        <i class="fas fa-shopping-basket fa-5x"></i>
      </div>
      <div class="card-content">
        <div class="title">
          <h1 class="display-7"><center>Producto más vendido</center></h1>
        </div>
        <div class="content">
          <h4 class="text-center"><b>@yield('masVen')</b></h4>
        </div>
      </div>
    </div>
  </div>
@endif


<!--<br><br><center><button type="button" class="btn btn-success btn-lg" style='width:180px; height:70px'>Iniciar Venta</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<button type="button" class="btn btn-danger btn-lg" style='width:180px; height:70px'>Cerrar Día</button></center>-->




@endsection
