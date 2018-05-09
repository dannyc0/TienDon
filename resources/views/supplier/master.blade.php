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
          <h1 class="display-7">Total de proveedores</h1>
        </div>
        <div class="content">
          <h4 class="text-center"><b>@yield('supplierSum')</b></h4>
        </div>
      </div>
    </div>
  </div>
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
                <option>GA812</option>
                <option>CCA9812</option>
                <option>BO9812</option>
            </select>
          </div >
          <div class="col-md-3 mb-3">
            <label>Nombre:</label>
            <select class="form-control">
                <option>Gamesa</option>
                <option>Coca-Cola</option>
                <option>Bonafon</option>
            </select>
          </div>
      <div class="col-md-3 mb-3">
        <br>
        <button type="submit" class="btn btn-outline-primary">
          Buscar
        </button>
      </div>
      <br>
      <br>
    </div>
              <br>
              <br>
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
            <h3>Proveedores</h3>
            <br>
            <label>Código:</label>
            <input type="text" name="" class="form-control">
            <label>Nombre:</label>
            <input type="text" name="" class="form-control">
            <label>Teléfono:</label>
            <input type="text" class="form-control">
            <label>Logotipo:</label>
            <br>
            <input type="file" name="">
            <br>
            <div class="text-right">
              <br>
              <button type="submit" class="btn btn-outline-primary">
                Agregar
              </button>
              <button type="submit" class="btn btn-outline-success">
                Guardar Cambios
              </button>
            </div>
          </div>
    </form>
  </div>
@endsection
