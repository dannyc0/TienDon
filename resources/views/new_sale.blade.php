@extends('layouts.master')

@section('pageTitle','Escritorio')

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
                  <center><button type="submit" class="btn btn-outline-success">
                    Seleccionar
                  </button></center>
      </td>
    </tr>
 </tbody>
</table>
</div> 
</form>
</div>
</div>
<div class="contenedor">
  
</div>
@endsection
