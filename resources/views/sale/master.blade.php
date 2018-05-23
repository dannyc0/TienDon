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
            <h1 class="display-7">No. Ventas</h1>
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
            <h1 class="display-7">Total Ventas</h1>
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
  @endif

<div class="contenedor">
  <form action="{{ route('fetchSale') }}" method="post">
      <div class="form-group">
        <h3>Buscar</h3>
        <br>
        </select>
        <div class="form-row">
        <div class="col-md-10 mb-3">
        <label>Fecha:</label>
        <input type="date" class="form-control" name="date" >
      </div>
        <div class=" col-md-2 mb-3 form-button2">
          <br>
          <button type="submit" class="btn btn-outline-primary">
            Buscar
          </button>
        </div>
      </div>
      </div>
      @csrf
    </form>
  </div>
  <div class="contenedor">
        <h3>Registro <strong>@yield('date')</strong></h3><br>
        <div class="form-group">
          <div  class="table-responsive">
          <table class="table table-bordered">
  				<thead class="thead-light">
    				<tr>
     					 <th>Cajero:</th>
     					 <th>Produtos vendidos:</th>
               <th>Monto:</th>
    				</tr>
 				 </thead>
  			 <tbody>
           @yield('rowData')
         </tbody>
</table>
<br><label>Total de productos vendidos: @yield('totalVentas')</label><br>

<br><label>Monto total: $@yield('totalGanancias')</label>

</div>
</div>
</div>
@endsection
