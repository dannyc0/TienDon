@extends('layouts.master')

@section('pageTitle','Inventario')

@section('content')
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
  <form>
    <div class="form-row">
      <h3>Agregar producto al inventario</h3>
    </div>
      <br>
      <div class="form-row">
            <div class="col-md-3 mb-3">
          <label>Categoría:</label>
          <select class="form-control">
            @yield('categories');
          </select><br>
        </div>

            <div class="col-md-3 mb-3">
          <label>Producto:</label>
          <select class="form-control">
            @yield('products')
          </select><br>
        </div>

            <div class="col-md-2 mb-3">
          <label>Cantidad:</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-1 mb-3">
            <br><br>
            <label id="piezaInventario">Pza.</label>

          </div>
       <div class="col-md-3 mb-3 form-button3"><br>
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
          <table class="table table-bordered">
            <thead class="thead-light">
              <tr>
                 <th>Código:</th>
                 <th>Nombre:</th>
                 <!--<th>Presentación:</th>-->
                 <!--<th>Tipo:</th>-->
                 <th>Precio:</th>
                 <th>Costo:</th>
                 <th>Existencia:</th>
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
