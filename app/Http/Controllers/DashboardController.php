<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;
  use View;
  use App\Producto;
  use App\DetalleVenta;
  use App\Venta;
  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\DB;

  class DashboardController extends Controller{

    public function showDashboard(){
       $date= date('Y-m-d');
    	 $ganDa =  DB::table('producto')
      ->join('detalle_venta','producto.id','=','detalle_venta.producto_id_producto')
      ->select(DB::raw('SUM((precio_producto-costo_producto)*cantidad_venta) as Ganancia'))
      ->first();
    	 $masVen = "CocaCola600ml";
      return View::make('dashboard.index',compact('ganDa','masVen'));


    }

  }

?>
