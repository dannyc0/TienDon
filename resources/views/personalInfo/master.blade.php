@extends('layouts.master')

@section('pageTitle','Información personal')

@section('content')
	
	<div class="contenedor">
  <form>
    <div class="form-group">
      <h3>Información Personal:</h3>
      <label>Nombre:</label>
      <input type="text" name="" class="form-control" id="nombreUsuario">
      <label>Primer apellido:</label>
      <input type="text" class="form-control" id="apellidoUsuario">
      <label>Segundo Apellido:</label>
      <input type="text" name="" class="form-control" id="segundoApellidoUsuario">
      <label>Rol:</label>
      <input type="text" name="" class="form-control" id="rolUsuario">
      <br>
      <label>Foto de perfil:</label>
      <br>
      <input type="file" name="">
      <div class="text-right">
        <br>
        <button type="submit" class="btn btn-outline-success">
              Guardar
        </button>
      </div>
    </div>
  </form>
</div>
@endsection
