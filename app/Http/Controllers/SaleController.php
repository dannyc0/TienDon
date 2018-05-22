<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;
  use View;
  use App\Producto;
  use App\DetalleVenta;
  use App\Venta;
  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\DB;

  class SaleController extends Controller{

    public function showSale(){
      $total_sales = Venta::all()->count();

      $sales_sum = DB::table('producto')
    ->join('detalle_venta','producto.id','=','detalle_venta.producto_id_producto')
    ->select(DB::raw('SUM(precio_producto*cantidad_venta) as Total'))
    ->first();

      $gain = DB::table('producto')
      ->join('detalle_venta','producto.id','=','detalle_venta.producto_id_producto')
      ->select(DB::raw('SUM((precio_producto-costo_producto)*cantidad_venta) as Ganancia'))
      ->first();


      $seller_details = array(array('2018-04-12','560','200','Andre Lizeth Calleja Quintanar'));
      return View::make('sale.index',compact('seller_details','total_sales','sales_sum','gain','products_sold'));
    }

  }

?>
