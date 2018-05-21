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
      <h1 class="page-header">Reporte de Inventario</h1>
      <div id="project">
        $now = new Date();
        <div><span>Fecha:</span> Mayo 25, 2018</div>
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
                <th>Codigo:</th>
                <th>Producto:</th>
                <th>Presentación:</th>
                <th>Cantidad:</th>
            </tr>                            
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
              <td> {{$product->id_producto}} </td>    
              <td> {{$product->nombre_producto}} </td>
              <td> {{$product->presentacion_producto}} </td>
              <td> {{$product->cantidad_producto}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
</main>
</body>
</html>