@extends('layouts.master')


@section('pageTitle','Escritorio')

@section('content')
<center><h2>Inventario:</h2></center>
<div class="contenedor">
  <form>
    <div class="form-group">
      <br>
      <br>
      <h4>Agregar Producto</h4>
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
          <button type="submit" class="btn btn-outline-primary">
          Agregar</button>
      </div>
    </div>
    <div class="contenedor">
          <div class="form-group">
            <h3>Productos:</h3>
        <table class="table table-bordered table-responsive">
        <thead class="thead-default">
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
</form>
</div>
@endsection
