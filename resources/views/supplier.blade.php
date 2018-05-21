@extends('layouts.master')

@section('pageTitle','Escritorio')

@section('content')
  <form>
          <div class="form-group">
            <label>Código:</label>
            <input type="text" name="">
            <label>Nombre:</label>
            <input type="text" name="">
            <label>Teléfono:</label>
            <input type="text">
            <label>Logotipo:</label>
            <input type="file" name="">
            <br>
            <br>
            <button type="button"><label class="lnr lnr-file-add"><font></font>Agregar</label></button>

        </div>
            <div class="form-group">
              <h3>Buscar por:</h3>
              <br>
              <label>Nombre:</label>
              <input type="text" name="">
              <label>Código:</label>
              <input type="text" name="">
                <button type="button"><label class="lnr lnr-magnifier"><font></font></label></button>
                <br>
                <br>
                <table>
  				<thead>
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
              <button type="button"><label class="lnr lnr-sync"><font></font>Actualizar</label></button>
              <button type="button"><label class="lnr lnr-trash"><font></font></label></button>
      </td>
    </tr>
 </tbody>
</table>
</div> </form>
@endsection
