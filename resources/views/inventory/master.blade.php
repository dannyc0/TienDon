@extends('layouts.master')

@section('pageTitle','Inventario')

@section('content')
@yield('message')
@if (Auth::user()->role_id==1)
<div class="card-container light-font">
  <div class="summary-card secondary-color">
    <div class="card-icon">
      <i class="fas fa-hashtag fa-5x"></i>
    </div>
    <div class="card-content">
      <div class="title">
        <h1 class="display-7">Total de productos</h1>
      </div>
      <div class="content">
        <h4 class="text-center"><b>@yield('productsSum')</b></h4>
      </div>
    </div>
  </div>
  <div class="summary-card green-color">
    <div class="card-icon">
      <i class="fas fa-dollar-sign fa-5x"></i>
    </div>
    <div class="card-content">
      <div class="title">
        <h1 class="display-7">Valor de inventario</h1>
      </div>
      <div class="content">
        <h4 class="text-center"><b>@yield('inventoryValue')</b></h4>
      </div>
    </div>
  </div>
</div>
@endif
<div class="contenedor">
  <div class="col-md-12">
  <form action="{{ route('inventario.store') }}" method="post">
    @csrf
    <div class="form-row">
      <h3>Agregar producto al inventario</h3>
    </div>
      <br>
      <div class="form-row">
        <div class="col-md-2 mb-3 text-right">
          <label class="lead">Buscar:</label>
        </div>
        <div class="col-md-10 mb-3">
          <input type="text" name="id" id="searchProduct" class="form-control" placeholder="Código de barras de producto">
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-2 mb-3 text-right">
          <label class="lead">Producto:</label>
        </div>
        <div class="col-md-3 mb-3">
          <input type="text" name="name" id="productName" class="form-control" readonly>
        </div>
        <div class="col-md-2 mb-3 text-right">
          <label class="lead">Cantidad:</label>
        </div>
        <div class="col-md-2 mb-3">
          <input type="text" name="quantity" class="form-control" required>
        </div>
        <div class="col-md-1 mb-3">
          <label class="lead" id="productType"></label>
        </div>
        <div class="col-md-2 mb-3 form-button3"><br>
          <button type="submit" class="btn btn-outline-primary">
            Agregar
          </button>
        </div>
      </div>
  </form>
</div>
</div>

    <div class="contenedor ">
          <div class="form-group">
            <h3>Inventario</h3>
        <div class="table-responsive">
          <table class="table table-bordered table-fixed">
            <thead class="thead-light">
              <tr>
                 <th style="width:25%">Código:</th>
                 <th style="width:30%">Nombre:</th>
                 <th style="width:15%">Precio:</th>
                 <th style="width:15%">Costo:</th>
                 <th style="width:15%">Existencia:</th>
              </tr>
           </thead>
           <tbody>
              @yield('rowData')
          </tbody>
        </table>
      </div>
</div>
</div>
@endsection
