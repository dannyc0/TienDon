@extends('layouts.master')

@section('pageTitle','Escritorio')

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
  </div>
@endif
<div class="contenedor">
  <form>
    <div class="form-group">
      <h3>Buscar Producto</h3>
      <br>
      <div class="form-row">
         <div class="col-md-2 mb-3 text-right">
            <label class="lead">Buscar:</label>
        </div>
        <div class="col-md-10 mb-3">
          <input type="text" id="search" class="form-control" placeholder="Ej. Ruflles Queso, Bota01, 750101111 ">
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered table-fixed">
  				<thead class="thead-light">
    				<tr>
     			      <th style="width:15%">Código:</th>
     					  <th style="width:10%">Categoría:</th>
      				  <th style="width:10%">Marca:</th>
                <th style="width:15%">Nombre:</th>
                <th style="width:15%">Presentación:</th>
                <th style="width:10%">Costo:</th>
                <th style="width:10%">Precio:</th>
      					<th style="width:15%">Acciones</th>
    				</tr>
 				 </thead>
  			 <tbody>
              @yield('rowData')
          </tbody>
        </table>
      </div>
    </div>
  </form>
</div>
<div class="contenedor" id="formCard">
  <form action="{{ route('productos.store') }}" method="post" id="formy">
    <div class="form-group">
      <h3 id="titleForm">Nuevo Producto</h3>
      <br>
      <input type="text" id="reqType" name="reqType" value="add" style="display:none">

      <label>Código:</label>
      <input type="text" name="id" class="form-control" id="codigoProducto" pattern="[0-9]{9,13}" title="Sólo puedes ingresar números" required>

      <label>Categoría:</label>
      <select class="form-control" name="category" id="categoriaProducto" required>
        @yield('categories')
      </select>

      <label>Marca:</label>
      <select class="form-control" name="supplier" id="marcaProducto" required>
        @yield('brands')
      </select>

      <label>Nombre:</label>
      <input type="text" class="form-control" name="name" id="nombreProducto" required>

      <label>Presentación:</label>
      <input type="text" name="presentation" class="form-control" id="presentacionProducto" required>

      <label>Tipo de Producto:</label>
      <select class="form-control" name="type" id="tipoProducto" required>
        <option>Peso</option>
        <option>Pieza</option>
      </select>

      <label>Costo:</label>
      <input type="text" name="cost" class="form-control" id="costoProducto" pattern="[0-9]{,5}" title="Sólo puedes ingresar números" required>

      <label>Precio:</label>
      <input type="text" name="price" class="form-control" id="precioProducto" pattern="[0-9]{,5}" title="Sólo puedes ingresar números" required>

      <div class="text-right">
        <br>
        <button type="submit" class="btn btn-outline-primary" id="buttonAdd">Agregar</button>
        <button id="buttonUpdate" style="display:none" class='btn btn-outline-success' type="submit">Actualizar</button>
        <button class='btn btn-outline-primary' onclick='newForm()' id="buttonNew" type='button' style="display:none">Nuevo</button>
      </div>
    </div>
    @csrf
  </form>
</div>
@endsection
