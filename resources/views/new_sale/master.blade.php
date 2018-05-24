@extends('layouts.master')

@section('pageTitle','Venta nueva')

@section('content')
<div class="row">
  <div class="col-md-9">
    <div class="contenedor">
        <div class="form-row">
          <h3>Registrar venta</h3>
        </div>
          <br>
          <div class="form-row">
            <div class="col-md-2 mb-3 text-right">
              <label class="lead">Buscar:</label>
            </div>
            <div class="col-md-10 mb-3">
              <input type="text" name="id" id="searchProduct" class="form-control" placeholder="Código de barras de producto" required>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-2 mb-3 text-right">
              <label class="lead">Producto:</label>
            </div>
            <div class="col-md-3 mb-3">
              <input type="text" name="name" id="productName" class="form-control" readonly required>
            </div>
            <div class="col-md-2 mb-3 text-right">
              <label class="lead">Cantidad:</label>
            </div>
            <div class="col-md-2 mb-3">
              <input type="text" name="quantity" id="quantity" class="form-control" required>
            </div>
            <div class="col-md-1 mb-3">
              <label class="lead" id="productType"></label>
            </div>
            <div class="col-md-2 mb-3 form-button3"><br>
              <button id="addSale" class="btn btn-outline-primary">
                Agregar
              </button>
            </div>
          </div>
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
          <th>Precio:</th>
          <th>Subtotal:</th>
          <th>Acciones:</th>
        </tr>
      </thead>
      <tbody id="saleDetail">
      </tbody>
    </table>
  </div>
</div>

</div>
  </div>
  <div class="col-md-3 payment-container">
    <div class="contenedor text-center">
      <h4>Total a Pagar:</h4>
      <span class="mb-5 lead">$</span><span class="mb-5 lead" id="totalDue">0</span>
       <div class="form-group text-center mt-3">
          <h4>Efectivo</h4>
           <input type="number" class="form-control mb-5" id="cash">
           <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalSale" data-backdrop="static">Finalizar venta</button>
        </div>
    </div>

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
          <h1 class="display-3">$20.00</h1>
        </div>
        <div class="modal-footer">
          <form class="" action="index.html" method="post">
            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-outline-success" data-dismiss="modal" id="finishSale">Aceptar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
