@extends('layouts.master')

@section('pageTitle','Reportes')

@section('content')


   <div class="contenedor">
    <form>
            <div class="form-group">
              <h3>Reportes:</h3>
              <br>
              </div>
              <div class="form-row">
                <div class="col-md-2 text-right">
              <label>Filtrar por fecha:</label>
            </div>
             <div class="col-md-8 mb-3"> 
              <input type="date" class="form-control" name="date" placeholder="dd/mm/aaaa">
            </div>
          </div>
        
            <br>
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
                          <center><a href="{{ route('reporteGenerado',['date'=>'2018-05-22'])}}" class="btn btn-outline-success"> Descargar </a>
                          <!--<button type="submit" class="btn btn-outline-danger">
                             Eliminar
                           </button></center>-->
                         </td>
                        </tr>
                        <tr>
                         @yield('rowData2')
                         <td>
                          <center><a href="{{ route('reporteGeneradob',['date'=>'2018-05-22'])}}" class="btn btn-outline-success"> Descargar </a>
                          <!--<button type="submit" class="btn btn-outline-danger">
                             Eliminar
                           </button></center>-->
                         </td>
                        </tr>
                        <tr>
                         @yield('rowData3')
                         <td>
                          <center><a href="{{ route('reporteGeneradoc')}}" class="btn btn-outline-success"> Descargar </a>
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
