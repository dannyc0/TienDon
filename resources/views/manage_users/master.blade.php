@extends('layouts.master')

@section('pageTitle','Escritorio')

@section('content')
  <div class="card-container light-font">
    <div class="summary-card secondary-color">
      <div class="card-icon">
        <i class="fas fa-hashtag fa-5x"></i>
      </div>
      <div class="card-content">
        <div class="title">
          <h1 class="display-7">Total de usuarios</h1>
        </div>
        <div class="content">
          <h4 class="text-center"><b>@yield('usersSum')</b></h4>
        </div>
      </div>
    </div>
  </div>
<div class="contenedor">
  <form>
        <div class="form-group">
          <h3>Usuarios</h3>
          <br>
        <div class="table-responsive">
          <table class="table table-bordered">
    				<thead class="thead-light">
      				<tr>
       			      <th>CURP</th>
       					  <th>Nombre(S)</th>
        					<th>Primer Apellido</th>
                  <th>Segundo Apellido</th>
                  <th>Rol</th>
        					<th>Acciones</th>
      				</tr>
   				  </thead>
  			    <tbody>
    			     <tr>
                  @yield('rowData')
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
              <th>Rol:</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                @yield('rowData2')
            </tr>
          </tbody>
          </table>
          <br>
          <br>
          <label>Seleccionar Rol:</label>
          <select class="form-control">
            @yield('roles')
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
