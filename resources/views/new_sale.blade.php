@extends('layouts.master')

@section('pageTitle','Escritorio')

@section('content')
  <form>
          <div class="form-group">
            <h3>Buscar por:</h3>
            <label>Categoría:</label>
            <select class="form-control">
            <option>Lacteos</option>
            <option>Embutidos</option>
            <option>Bebidas</option>
            <option>Limpieza</option>
            </select>
            <label>Código:</label>
            <input type="text">
            <label>Nombre:</label>
            <input type="text">
            <button type="button"><label class="lnr lnr-magnifier"><font></font></label></button>
        </div>
            <div class="form-group">
          <table>
  				<thead>
    				<tr>
     					 <th>Código:</th>
     					 <th>Categoría:</th>
      					 <th>Marca:</th>
                 <th>Nombre:</th>
                 <th>Presentación:</th>
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
                <td>$50</td>
      					<td>
        <div>
        	<button type="button"><label class="lnr lnr-select"><font></font></label></button>
        </div>
        <div class="LineaDetalle">


        </div>
      </td>
    </tr>
 </tbody>
</table>
</div> </form>
@endsection
