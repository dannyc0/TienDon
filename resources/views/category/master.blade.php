@extends('layouts.master')

@section('pageTitle','Escritorio')

@section('content')
@yield('message')
@if (Auth::user()->role_id==1)
  <div class="card-container light-font">
    <div class="summary-card secondary-color">
      <div class="card-icon">
        <i class="fas fa-hashtag fa-5x"></i>
      </div>
      <div class="card-content">
        <div class="title">
          <h1 class="display-7">Total de categorias</h1>
        </div>
        <div class="content">
          <h4 class="text-center"><b>@yield('categoriesSum')</b></h4>
        </div>
      </div>
    </div>
  </div>
@endif
<div class="contenedor">
    <div class="form-group">
      <h3>Buscar Categoría</h3>
      <br>
      <div class="form-row">
        <div class="col-md-2 mb-3 text-right">
          <label class="lead">Buscar:</label>
        </div>
        <div class="col-md-10 mb-3">
          <input type="text" id="search" class="form-control" placeholder="Ej. Surtido de galletas, Galletas, Gall01 ">
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered table-fixed">
  				<thead class="thead-light">
    				<tr>
     			      <th style="width:15%">Código:</th>
     					  <th style="width:25%">Nombre:</th>
      				  <th style="width:40%">Descripción:</th>
      					<th style="width:20%">Acciones</th>
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
  <form action="{{ route('categorias.store') }}" method="post" id="formy">
    <div class="form-group">
      <h3 id="titleForm">Nueva Categoría</h3>
      <br>
      <input type="text" id="chances" value="false" style="display:none">
      <input type="text" id="reqType" name="reqType" value="add" style="display:none">
      <label>Código:</label>
      <input type="text" name="id" class="form-control" readonly="" id="codigoCategoria" required><br>
      <label>Nombre:</label>
      <input type="text" class="form-control" pattern="[a-zA-Z][a-zA-Z ]{3,}" title="Al menos 4 caracteres, sin acentos" id="nombreCategoria" name="nombre_categoria" required><br>
      <label>Descripción:</label>
      <input type="text" name="descripcion_categoria" class="form-control" id="descripcionCategoria" required>
      <div class="text-right">
        <br>
        <button type="submit" class="btn btn-outline-primary" id="buttonAdd">Agregar</button>
        <button id="buttonUpdate" style="display:none" class='btn btn-outline-success' type="submit">Actualizar</button>
        <button class='btn btn-outline-primary' onclick='newForm()' id="buttonNew" type='button' style="display:none">Nuevo</button>
      </div>
    </div>
    @csrf
  </form>
</div>
@endsection
