@extends('layouts.master')

@section('pageTitle','Escritorio')

@section('content')
<div class="contenedor">
  <form>
    <div class="form-group">
      <h3>Agregar Producto</h3>
      <br>
          <label>Categoría:</label>
          <select class="form-control">
          <option>Lacteos</option>
          <option>Embutidos</option>
          <option>Bebidas</option>
          <option>Limpieza</option>
          </select>
          <label>Producto:</label>
          <select class="form-control">
          <option>coca-cola</option>
          <option>fanta</option>
          <option>Sidral Mundet</option>
          <option>Sprite</option>
          </select>
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
    <div class="contenedor">
          <div class="form-group">
            <h3>Productos</h3>
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
                  <td>LA002</td>
                  <td>Lácteos</td>
                  <td>Lala</td>
                  <td>Yomi Lala</td>
                  <td>200 ml.</td>
                  <td>Pieza</td>
                  <td>$50</td>
                  <td>$29</td>
                  <td>200</td>
              </tr>
          </tbody>
        </table>
      </div>
</div>
</div>
@endsection
