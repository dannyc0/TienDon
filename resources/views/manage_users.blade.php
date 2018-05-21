@extends('layouts.master')

@section('pageTitle','Escritorio')

@section('content')
  <form>
            <div class="form-group">
          <table>
  				<thead>
    				<tr>
     					 <th>CURP:</th>
     					 <th>Nombre(S):</th>
      					 <th>Primer Apellido:</th>
                 <th>Segundo Apellido:</th>
                 <th>Rol:</th>
      					 <th></th>
    				</tr>
 				 </thead>
  			<tbody>
    				<tr>
      					<td>CAQA961130MDFLNN02</td>
     				 	<td>Andrea Lizeth</td>
     					<td>Calleja</td>
      					<td>Quintanar</td>
                <td>Administrador</td>
      					<td>
                <button type="button"><label class="lnr lnr-pencil"><font></font>Administrar</label></button>
                <button type="button"><label class="lnr lnr-trash"><font></font></label></button>
        </div>
      </td>
    </tr>
 </tbody>
</table>
</div>
</form>
        <br>
        <br>
        <br>
        <div class="administrar">
          <table>
            <thead>
              <tr>
                <th>Nombre(S):</th>
                <th>Primer Apellido:</th>
                <th>Segundo Apellido:</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Andrea Lizeth</td>
                <td>Calleja</td>
                <td>Quintanar</td>
              </tr>
            </tbody>
          </table>
          <br>
          <br>
          <label>Seleccionar Rol:</label>
          <select class="form-control">
            <option>Administrador</option>
            <option>Cajero</option>
            </select>
            <button type="button"><label>Agregar</label></button>
@endsection
