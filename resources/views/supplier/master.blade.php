@extends('layouts.master')

@section('pageTitle','Escritorio')

@section('content')
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
    <form>
            <div class="form-group">
              <h3>Buscar Proveedor</h3>
              <br>
              <div class="form-row">
            <br>
            <label>Filtrar por:</label>
            </div>
            <div class="form-row">
            <div class="col-md-3 mb-3">
              <label>Código:</label>
            <select class="form-control">
                @yield('code')
            </select>
          </div >
          <div class="col-md-3 mb-3">
            <label>Nombre:</label>
            <select class="form-control">
                @yield('name')
            </select>
          </div>
      <div class="col-md-3 mb-3">
        <br>
        <div class="col-md-3 mb-3 text-center form-button2">
            <button type="submit" class="btn btn-outline-primary">
              Buscar
            </button>
          </div>
      </div>
    </div>
            <div class="table-responsive">
              <table class="table table-bordered">
  				        <thead class="thead-light">
    				          <tr>
     					            <th>Código:</th>
     					            <th>Nombre:</th>
      					          <th>Teléfono:</th>
                          <th>Logotipo:</th>
      					         <th></th>
    				          </tr>
 				         </thead>
  			         <tbody>
    				         <tr>
      					         @yield('rowData')
      					         <td>
                          <center><button type="submit" class="btn btn-outline-success">
                             Actualizar
                          </button>
                          <button type="submit" class="btn btn-outline-danger">
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
  <div class="contenedor">
  <form>
          <div class="form-group">
            <h3>Nuevo Proveedor</h3>
            <br>
            <label>Código:</label>
            <input type="text" name="" class="form-control" readonly="" id="codigoProveedor">
            <label>Nombre:</label>
            <input type="text" name="" class="form-control" id="nombreProveedor">
            <label>Teléfono:</label>
            <input type="text" class="form-control" id="telefonoProveedor">
            <br>
            <div class="text-right">
              <br>
              <button type="submit" class="btn btn-outline-primary" id="botonProveedor">
                Agregar
              </button>
              <!--<button type="submit" class="btn btn-outline-success">
                Guardar Cambios
              </button>-->
            </div>
          </div>
    </form>
  </div>
@endsection
