@extends('layouts.master')

@section('pageTitle','Reportes')

@section('content')


   <div class="contenedor">
    <form>
            <div class="form-group">
              <h3>Reporte:</h3>
              <br>
              <div class="form-row">
            <br>
            <label>Filtrar por:</label>
            </div>
            <div class="form-row">
            <div class="col-md-3 mb-3">
              <label>Tipo de reporte:</label>
            <select class="form-control">
                <option>Ventas</option>
                <option>Compras</option>
                <option>Inventario</option>
            </select>
          </div >
          <div class="col-md-3 mb-3">
            <label>Fecha:</label>
            <input type="date" name="" class="form-control">
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
                          <th>Fecha:</th>
                          <th>Reporte:</th>
                          
                         <th></th>
                      </tr>
                 </thead>
                 <tbody>
                     <tr>
                         @yield('rowData')
                         <td>
                          <center><a href="{{ route('reporteGenerado')}}" class="btn btn-outline-success"> Descargar </a>
                          <button type="submit" class="btn btn-outline-danger">
                             Eliminar
                           </button></center>
                         </td>
                        </tr>
                        <tr>
                         @yield('rowData2')
                         <td>
                          <center><a href="{{ route('reporteGeneradob')}}" class="btn btn-outline-success"> Descargar </a>
                          <button type="submit" class="btn btn-outline-danger">
                             Eliminar
                           </button></center>
                         </td>
                        </tr>
                        <tr>
                         @yield('rowData3')
                         <td>
                          <center><a href="{{ route('reporteGeneradoc')}}" class="btn btn-outline-success"> Descargar </a>
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

@endsection
