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
                <div class="col-md-8 mb-3">
                  <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="date">
                </div>
              </div><br>
            <center><div class="table-responsive col-md-8">
              <table class="table table-bordered">
                  <thead class="thead-light">
                      <tr>
                          <th>Tipo de reporte:</th>

                         <th></th>
                      </tr>
                 </thead>
                 <tbody>
                     <tr>
                         @yield('rowData')
                         <td>
                          <center><button href="{{ route('reporteGenerado')}}" class="btn btn-outline-success">Descargar </button>
                          <!--<button type="submit" class="btn btn-outline-danger">
                             Eliminar
                           </button></center>-->
                         </td>
                        </tr>
                        <tr>
                         @yield('rowData2')
                         <td>
                          <center><button href="{{ route('reporteGeneradob')}}" class="btn btn-outline-success"> Descargar </button>
                          <!--<button type="submit" class="btn btn-outline-danger">
                             Eliminar
                           </button></center>-->
                         </td>
                        </tr>
                        <tr>
                         @yield('rowData3')
                         <td>
                          <center><button href="{{ route('reporteGeneradoc')}}" class="btn btn-outline-success"> Descargar </button>
                         <!-- <button type="submit" class="btn btn-outline-danger">
                             Eliminar
                           </button></center>-->
                         </td>
                        </tr>

                </tbody>
              </table>
            </div></center>
             </div>
         </form>
      </div>

@endsection
