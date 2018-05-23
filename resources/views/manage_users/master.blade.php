@extends('layouts.master')

@section('pageTitle','Escritorio')

@section('content')
  @if($message = Session::get('success'))
    <div class="alert alert-success text-center">
      <p>{{ $message }}</p>
    </div>
  @endif
@if (Auth::user()->role_id==1)
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
@endif
<div class="contenedor">
    <div class="form-group">
      <h3>Usuarios</h3>
      <br>
    <div class="table-responsive">
      <table class="table table-bordered">
				<thead class="thead-light">
  				<tr>
   					  <th>Nombre(S)</th>
    					<th>Primer Apellido</th>
              <th>Segundo Apellido</th>
              <th>Rol</th>
    					<th>Acciones</th>
  				</tr>
				  </thead>
		    <tbody>
            @yield('rowData')
        </tbody>
       </table>
     </div>
   </div>
</div>
<div class="contenedor" id="formCard">
    <div class="form-group">
      <h3>Cambiar Rol</h3><br>
      <div class="table-responsive">
        <table class="table table-md">
          <thead class="thead-light">
            <tr>
              <th>Nombre(S)</th>
              <th>Primer Apellido</th>
              <th>Segundo Apellido</th>
              <th>Rol</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td id="userName"></td>
              <td id="firstSurname"></td>
              <td id="secondSurname"></td>
              <td id="userRole"></td>
            </tr>
          </tbody>
          </table>
          <br>
          <br>
          <form action="" method="post">
            <input id="id" name="id" style="display:none">
            <label>Seleccionar Rol:</label>
            <select class="form-control" name="role_id">
              @yield('roles')
            </select>
            <div class="text-right">
              <br>
              <button type="submit" class="btn btn-outline-primary">Guardar cambios</button>
            </div>
            @csrf
          </form>
        </div>
    </div>
@endsection
