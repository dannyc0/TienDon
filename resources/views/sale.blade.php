@extends('layouts.master')

@section('pageTitle','Escritorio')

@section('content')
  <form>
          <div class="form-group">
            <label>Buscar por: </label>
            <select class="form-control">
            <option>Día</option>
            <option>Semana</option>
            <option>Mes</option>
            <option>Año</option>
            </select>
            <label>Periodo de:</label>
            <input type="date">
            <label>a</label>
            <input type="date">
            <button type="button"><label class="lnr lnr-magnifier"><font></font></label></button>
        </div>
            <div class="form-group">
          <table>
  				<thead>
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
        <div>
        	<button type="button"><label class="lnr lnr-trash"><font></font></label></button>
        </div>
      </td>
    </tr>
 </tbody>
</table>
</div> </form>
@endsection
