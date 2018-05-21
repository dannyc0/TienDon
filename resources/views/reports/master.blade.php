@extends('layouts.master')

@section('pageTitle','Reportes')

@section('content')


   <div class="contenedor">
    <form>
            <div class="form-group">
              <h3>Reportes:</h3>
              <br>
              <div class="form-row">
                <div class="col-md-2 mb-3 text-right">
                  <label class="lead">Filtrar por fecha:</label>
                </div>
                <div class="col-md-10 mb-3">
                  <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                </div>
              </div><br>
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
