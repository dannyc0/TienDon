@extends('layouts.master')

@section('pageTitle','Escritorio')

@section('content')
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
    <div class="contenedor">
          <div class="form-group">
            <h3>Inventario</h3>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead class="thead-light">
              <tr>
                 <th>Código:</th>
                 <th>Categoría:</th>
                 <th>Marca:</th>
                 <th>Nombre:</th>
                 <th>Presentación:</th>
                 <th>Tipo:</th>
                 <th>Precio:</th>
                 <th>Costo:</th>
                 <th>Existencia:</th>
              </tr>
           </thead>
           <tbody>
              <tr>
                  @yield('rowData')
              </tr>
          </tbody>
        </table>
      </div>
</div>
</div>
<div class="contenedor">
  <form>
    <div class="form-group">
      <h3>Agregar producto al inventario</h3>
      <br>
          <label>Categoría:</label>
          <select class="form-control">
            @yield('categories');
          </select><br>
          <label>Producto:</label>
          <select class="form-control">
            @yield('products')
          </select><br>
          <label>Cantidad:</label>
          <input type="text" class="form-control">
          <br>
          <div class="text-right">
            <button type="submit" class="btn btn-outline-primary">
              Agregar
            </button>
          </div>
  </form>
      </div>
    </div>
@endsection
