@extends('layouts.master')

@section('pageTitle','Escritorio')

@section('content')
<div class="contenedor">
  <form>
          <div class="form-group">
            <h3>Productos</h3>
            <br>
            <label>Código:</label>
            <input type="text" name="" class="form-control">
            <label>Categoría:</label>
            <select class="form-control">
            <option>Lacteos</option>
            <option>Embutidos</option>
            <option>Refrescos</option>
            <option>Limpieza</option>
            </select>
            <label>Marca:</label>
            <select class="form-control">
            <option>Coca-Cola</option>
            <option>Gamesa</option>
            <option>Alpura</option>
            <option>Sabritas</option>
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
        <div class="contenedor">
          <form>
            <div class="form-group">
              <h3>Buscar Producto</h3>
              <br>
              <label>Filtrar por:</label>
                <select class="form-control">
                <option>Código</option>
                <option>Nombre</option>
                <option>Categoria</option>
                </select>
                <div class="text-right">
                  <br>
                  <button type="submit" class="btn btn-outline-primary">
                    Buscar
                  </button>
            </div>
            <br>
            <br>
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
      				<td>LA002</td>
     				 	<td>Lácteos</td>
     					<td>Lala</td>
      				<td>Yomi Lala</td>
              <td>200 ml.</td>
              <td>Pieza</td>
              <td>$29</td>
              <td>$50</td>
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
@endsection
