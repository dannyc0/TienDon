<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Reporte 2</title>
    <link href="{{ asset('css/pdf.css') }}" rel="stylesheet">
  </head>
   <body>
<div id="logo">
        <br>
       <center> <img src="{{asset('img/tiendon_logo.png')}}" alt="" height="120" width="200"></center>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </div>
      <h1 class="page-header">Reporte de Ventas</h1>
      <div id="project">
        <div><span>Fecha:</span>{{$date}}</div>
        <div>Miscelanea "El Don"</div>
        <div>Calle Sauces #376<br /> Col. Paseos de Cuautitlán, Cuautitlán, Edo. Mex.</div>
        <div>CP. 54807 </div>
        <br>
      </div>
      <br>
      <br>
      <br>
      <br>
    <main>
    	<br>
    	<br>
    	<br>
         <table class="table table-hover table-striped">
        <thead>
            <tr>     
                <th>Fecha y hora:</th>
                <th>Producto:</th>
                <th>Cantidad Vendida:</th>
            </tr>                            
        </thead>
        <tbody>
            @foreach($ventas as $venta)
            <tr>
              <td> {{$venta->venta_id_venta}} </td>    
              <td> {{$venta->producto_id_producto}} </td>
              <td> {{$venta->cantidad_venta}} </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</main>
</body>
</html>

    

