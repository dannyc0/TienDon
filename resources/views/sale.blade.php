@extends('layouts.master')

@section('pageTitle','Escritorio')

@section('content')

<div class="contenedor">
  <form>
          <div class="form-group">
            <h3>Registro De Ventas</h3>
            <br>
            <label>Filtrar por: </label>
            <select class="form-control">
            <option>Día</option>
            <option>Semana</option>
            <option>Mes</option>
            <option>Año</option>
            </select>
            <label>Periodo de:</label>
            <input type="date" class="form-control">
            <label>A</label>
            <input type="date" class="form-control">
            <div class="text-right">
                  <br>
                  <button type="submit" class="btn btn-outline-primary">
                    Buscar
                  </button>
            </div>
        </div>
    </form>
  </div>
  <div class="contenedor">
    <form>
        <div class="form-group">
          <div  class="table-responsive">
          <table class="table table-bordered">
  				<thead class="thead-light">
    				<tr>
     					 <th>Fecha:</th>
     					 <th>Monto:</th>
      					 <th>Ganancia:</th>
                 <th>Cajero:</th>
      					 <th></th>
    				</tr>
 				 </thead>
  			<tbody>
    				<tr>
      				<td>2018-04-12</td>
     				 	<td>560</td>
     					<td>200</td>
      				<td>Andrea Lizeth Calleja Quintanar</td>
      				<td>
                <center><button type="submit" class="btn btn-outline-danger">
                    Eliminar
              </button></center>
              </td>
    </tr>
 </tbody>
</table>
</div> 
</div>
</form>
</div>
@endsection
