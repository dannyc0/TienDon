@extends('layouts.master')

@section('pageTitle','Escritorio')

@section('content')
<div class="contenedor">
  <form>
        <div class="form-group">
          <h3>Usuarios</h3>
          <br>
        <div class="table-responsive">
          <table class="table table-bordered">
  				<thead class="thead-light">
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
                <button type="submit" class="btn btn-outline-success">
                    Administrar
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

      <div class="contenedor">
        <form>
          <div class="form-group">
            <div class="table-responsive">
          <table class="table table-md">
            <thead class="thead-light">
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
            <div class="text-right">
              <br>
            <button type="submit" class="btn btn-outline-primary">
                    Agregar
            </button>
          </div>
  </div>
</form>
</div>
@endsection
