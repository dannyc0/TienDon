@extends('layouts.master')

@section('pageTitle','Escritorio')

@section('content')
  <form>
          <div class="form-group">
            <label>Código:</label>
            <input type="text" name="">
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
            <input type="text">
            <label>Presentación:</label>
            <input type="text" name="">
            <label>Tipo de Producto:</label>
            <select class="form-control">
            <option>Peso</option>
            <option>Pieza</option>
            </select>
            <label>Costo:</label>
            <input type="text" name="">
            <label>Precio:</label>
            <input type="text" name="">
            <button type="button"><label class="lnr lnr-file-add"><font></font>Agregar</label></button>

        </div>
            <div class="form-group">
              <h3>Buscar por:</h3>
              <br>
              <label>Nombre:</label>
              <input type="text" name="">
              <label>Código:</label>
              <input type="text" name="">
              <label>Categoria:</label>
                <select class="form-control">
                <option>Lacteos</option>
                <option>Embutidos</option>
                <option>Refrescos</option>
                <option>Limpieza</option>
                </select>
                <button type="button"><label class="lnr lnr-magnifier"><font></font></label></button>
                <br>
                <br>
                <table>
  				<thead>
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
              <button type="button"><label class="lnr lnr-sync"><font></font>Actualizar</label></button>
              <button type="button"><label class="lnr lnr-trash"><font></font></label></button>
      </td>
    </tr>
 </tbody>
</table>
</div> </form>
@endsection
