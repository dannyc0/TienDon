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
            <h1 class="display-7">Total de proveedores</h1>
          </div>
          <div class="content">
            <h4 class="text-center"><b>@yield('supplierSum')</b></h4>
          </div>
        </div>
      </div>
    </div>
  @endif
  <div class="contenedor">
        <div class="form-group">
          <h3>Buscar Proveedor</h3>
          <br>
          <div class="form-row">
              <div class="col-md-2 mb-3 text-right">
                <label class="lead">Buscar:</label>
              </div>
              <div class="col-md-10 mb-3">
                 <input type="text" id="search" class="form-control" placeholder="Ej. Marl01, Marlboro, 02098507">
              </div>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered table-fixed">
				        <thead class="thead-light">
  				          <tr>
   					            <th style="width:20%">Código:</th>
   					            <th style="width:30%">Nombre:</th>
    					          <th style="width:30%">Teléfono:</th>
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
    <form action="{{ route('proveedores.store') }}" method="post">
        <div class="form-group">
          <h3 id="titleForm">Nuevo Proveedor</h3>
          <br>
          <input type="text" id="reqType" name="reqType" value="add" style="display:none">
          <input type="text" id="chances" value="false" style="display:none">

          <label>Código:</label>
          <input type="text" name="id" class="form-control" readonly="" id="codigoProveedor" required>

          <label>Nombre:</label>
          <input type="text" name="name" class="form-control" id="nombreProveedor" required>

          <label>Teléfono:</label>
          <input type="text" name="telephone" class="form-control" id="telefonoProveedor" pattern="[0-9]{5,15}" required>

          <br>
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
