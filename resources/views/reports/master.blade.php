@extends('layouts.master')

@section('pageTitle','Reportes')

@section('content')
  <h2>@yield('titulo')</h2>
<div class="row">
  <div class="col-md-9">
    <div class="contenedor">
  <form>
        
          <div class="form-row">
            <h3>Consultar Reporte</h3>
          </div>
          <div class="form-row">

            <br>
            <label>Filtrar por:</label>
            </div>
            <div class="form-row">
            <div class="col-md-3 mb-3">
              <label>Reporte:</label>
            <select class="form-control">
                <option>Ventas</option>
                <option>Compras</option>
                <option>Inventario</option>
            </select>
          </div >
          <div class="col-md-3 mb-3">
            <label>Fecha:</label>
           <input type="date" class="form-control">
          </div>
          
          <div class="col-md-3 mb-3 text-center form-button">
            <button type="submit" class="btn btn-outline-success">
              Buscar
            </button>
          </div>
          <div class="col-md-3 mb-3 text-center form-button">
            <button type="submit" class="btn btn-outline-success">
              Imprimir PDF
            </button>
          </div>
          </div>
          
  </form>

@endsection
