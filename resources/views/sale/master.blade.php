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
          <h1 class="display-7">Ventas hoy</h1>
        </div>
        <div class="content">
          <h4 class="text-center"><b>@yield('totalSales')</b></h4>
        </div>
      </div>
    </div>
    <div class="summary-card green-color">
      <div class="card-icon">
        <i class="fas fa-dollar-sign fa-5x"></i>
      </div>
      <div class="card-content">
        <div class="title">
          <h1 class="display-7">Ventas hoy</h1>
        </div>
        <div class="content">
          <h4 class="text-center"><b>@yield('salesSum')</b></h4>
        </div>
      </div>
    </div>
    <div class="summary-card green-color">
      <div class="card-icon">
        <i class="fas fa-dollar-sign fa-5x"></i>
      </div>
      <div class="card-content">
        <div class="title">
          <h1 class="display-7">Ganancia</h1>
        </div>
        <div class="content">
          <h4 class="text-center"><b>@yield('gain')</b></h4>
        </div>
      </div>
    </div>
  </div>

<div class="contenedor">
  <form>
          <div class="form-group">
            <h3>Registro De Ventas</h3>
            <br>
            <label>Filtrar por: </label>
            <select class="form-control">
            <option>Día</option>
            <option>Semana</option>
            <option>Mes</option>
            <option>Año</option>
            </select>
            <label>Periodo de:</label>
            <input type="date" class="form-control">
            <label>A</label>
            <input type="date" class="form-control">
            <div class="text-right">
                  <br>
                  <button type="submit" class="btn btn-outline-primary">
                    Buscar
                  </button>
            </div>
        </div>
    </form>
  </div>
  <div class="contenedor">
    <form>
        <div class="form-group">
          <div  class="table-responsive">
          <table class="table table-bordered">
  				<thead class="thead-light">
    				<tr>
     					 <th>Fecha:</th>
     					 <th>Monto:</th>
      					 <th>Ganancia:</th>
                 <th>Cajero:</th>
      					 <th></th>
    				</tr>
 				 </thead>
  			<tbody>
    				<tr>
      				@yield('rowData')
      				<td>
                <center><button type="submit" class="btn btn-outline-danger">
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
