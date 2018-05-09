@extends('layouts.master')

@section('pageTitle','Venta nueva')

@section('content')
<div class="row">
<div class="contenedor">
  <form>
        
          <div class="form-row">
            <h3>Registrar Venta</h3>
          </div>
          <div class="form-row">
            <br>
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
          <div class="col-md-2 mb-3">
            <label>Cantidad:</label>
            <input type="number" class="form-control" placeholder="Cantidad" >
          </div>
          <div class="col-md-2 mb-3">
            <br><br>
            <label>Pza.</label>
            
          </div>
          <div class="col-md-8 mb-3 text-right">
            <button type="submit" class="btn btn-outline-success">
                    Agregar
                  </button>
          </div>
          </div>
          
  </form>
  <div class="form-group">
  <br>
  <h3>Detalle de venta</h3>
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead class="thead-light">
        <tr>
          <th>Código:</th>
          <th>Nombre:</th>
          <th>Cantidad:</th>
          <th>Subtotal:</th>
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
        <label>Total a Pagar:</label>
        <br>
        <form class="form-inline">
           <div class="form-group text-right">
              <label>Efectivo</label>
               <input type="number" class="form-control mx-sm-3">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSale" data-backdrop="static">Finalizar venta</button>
  
            </div>
            </form>
</div>
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
