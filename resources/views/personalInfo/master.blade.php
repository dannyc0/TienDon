@extends('layouts.master')

@section('pageTitle','Información personal')

@section('content')
	@if($message = Session::get('success'))
    <div class="alert alert-success text-center">
      <p>{{ $message }}</p>
    </div>
  @endif
	<div class="contenedor">
  <form action="{{ route('updatePersonalInfo') }}" method="post">
    <div class="form-group">
      <h3>Información Personal</h3>
			<input type="text" name="id" value="{{Auth::user()->id}}" style="display:none">
      <label>Nombre:</label>
      <input type="text" name="name" value="{{Auth::user()->name}}" class="form-control" id="nombreUsuario">
      <label>Primer apellido:</label>
      <input type="text" name="first_surname" value="{{Auth::user()->first_surname}}" class="form-control" id="apellidoUsuario">
      <label>Segundo Apellido:</label>
      <input type="text" name="second_surname" value="{{Auth::user()->second_surname}}" class="form-control" id="segundoApellidoUsuario">
      <label>Rol:</label>
      <input type="text" value="{{{Auth::user()->role_id==1 ? 'Administrador' : 'Cajero' }}}" class="form-control" id="rolUsuario" readonly>
      <br>
      <div class="text-right">
        <br>
        <button type="submit" class="btn btn-outline-success">Guardar cambios</button>
      </div>
    </div>
		@csrf
  </form>
</div>
@endsection
