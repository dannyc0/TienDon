@extends('layouts.master')

@section('pageTitle','Venta nueva')

@section('content')
<div class="contenedor">
  <form>
          <div class="form-group">
            <h3>Registrar Venta</h3>
            <br>
            <label>Filtrar por:</label>
            <select class="form-control">
              <option>Categoría</option>
              <option>Código</option>
              <option>Nombre</option>
            </select>
            <div class="text-right">
                  <br>
                  <button type="submit" class="btn btn-outline-primary">
                    Buscar
                  </button>
            </div>
        </div>
  </form>
  <div class="form-group">
      <div class="table-responsive">
        <table class="table table-bordered">
  				<thead class="thead-light">
    				<tr>
   					   <th>Código:</th>
   					   <th>Categoría:</th>
    					 <th>Marca:</th>
               <th>Nombre:</th>
               <th>Presentación:</th>
               <th>Precio:</th>
    					 <th>Acción</th>
    				</tr>
 				  </thead>
  			  <tbody>
    			  <tr>
        			@yield('products')
      				<td>
                <center>
                  <button type="submit" class="btn btn-outline-success">
                    Seleccionar
                  </button>
                </center>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </form>
  </div>
</div>
<div class="contenedor">
  <h3>Detalle de venta</h3>
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead class="thead-light">
        <tr>
          <th>Código:</th>
          <th>Nombre:</th>
          <th>Precio:</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          @yield('rowData')
        </tr>
      </tbody>
    </table>
  </div>
  <div class="text-right">
        <br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSale" data-backdrop="static">Finalizar venta</button>
  </div>
  <div class="modal fade" id="modalSale" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Venta finalizada</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-center">
          <p class="lead font-weight-bold">Devolver cambio:</p>
          <h1 class="display-3">$0.00</h1>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-outline-success" data-dismiss="modal">Aceptar</button>
        </div>
      </div>
    </div>
  </div>
@endsection
