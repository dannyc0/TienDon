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
</div>
<div class="contenedor">
  <form>
    <div class="form-group">
      <h3>Buscar Producto</h3>
      <br>
      <div class="form-row">
            <label>Filtrar por:</label>
            </div>
            <div class="form-row">
            <div class="col-md-3 mb-3">
              <label>Código:</label>
            <select class="form-control">
                <option>CO9812</option>
                <option>RE9812</option>
                <option>BLE9812</option>
            </select>
          </div >
          <div class="col-md-3 mb-3">
            <label>Nombre:</label>
            <select class="form-control">
                <option>Coca-cola 200ml</option>
                <option>Yomi lala 250 ml</option>
                <option>Pino 200ml</option>
            </select>
          </div>
      <div class="col-md-3 mb-3">
        <br>
        <div class="col-md-3 mb-3 text-center form-button2">
            <button type="submit" class="btn btn-outline-primary">
              Buscar
            </button>
          </div>
      </div>
    </div>
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
                <th>Costo:</th>
                <th>Precio:</th>
      					<th></th>
    				</tr>
 				 </thead>
  			 <tbody>
    				<tr>
              @yield('rowData')
      				<td>
                <button type="submit" class="btn btn-outline-success">
                      Actualizar
                </button>
                <button type="submit" class="btn btn-outline-danger">
                      Eliminar
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </form>
</div>
<div class="contenedor">
  <form>
    <div class="form-group">
      <h3>Productos</h3>
      <br>
      <label>Código:</label>
      <input type="text" name="" class="form-control">
      <label>Categoría:</label>
      <select class="form-control">
        @yield('categories')
      </select>
      <label>Marca:</label>
      <select class="form-control">
        @yield('brands')
      </select>
      <label>Nombre:</label>
      <input type="text" class="form-control">
      <label>Presentación:</label>
      <input type="text" name="" class="form-control">
      <label>Tipo de Producto:</label>
      <select class="form-control">
        <option>Peso</option>
        <option>Pieza</option>
      </select>
      <label>Costo:</label>
      <input type="text" name="" class="form-control">
      <label>Precio:</label>
      <input type="text" name="" class="form-control">
      <div class="text-right">
        <br>
        <button type="submit" class="btn btn-outline-primary">
          Agregar
        </button>
        <button type="submit" class="btn btn-outline-success">
              Guardar Cambios
        </button>
      </div>
    </div>
  </form>
</div>
@endsection
