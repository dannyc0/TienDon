@extends('layouts.master')

@section('pageTitle','Escritorio')

@section('content')

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
  <div class="contenedor">
    <form>
            <div class="form-group">
              <h3>Buscar Proveedor</h3>
              <br>
              <label>Filtrar por:</label>
                <select class="form-control">
                <option>Código</option>
                <option>Nombre</option>
                </select>
                <div class="text-right">
                  <br>
                  <button type="submit" class="btn btn-outline-primary">
                    Buscar
                  </button>
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
      					         <td>GA005</td>
     				             <td>Gamesa</td>
     				             <td>5554538287</td>
      				           <td>IMAGEN</td>
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
@endsection
