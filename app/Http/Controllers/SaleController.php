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

    public function index(){
      $total_sales = Venta::all()->count();

      $sales_sum = DB::table('producto')
    ->join('detalle_venta','producto.id','=','detalle_venta.producto_id_producto')
    ->select(DB::raw('SUM(precio_producto*cantidad_venta) as Total'))
    ->first();

      $gain = DB::table('producto')
      ->join('detalle_venta','producto.id','=','detalle_venta.producto_id_producto')
      ->select(DB::raw('SUM((precio_producto-costo_producto)*cantidad_venta) as Ganancia'))
      ->first();

      return View::make('sale.index',compact('total_sales','sales_sum','gain','products_sold'));
    }

    public function fetchDate(Request $request){
      //SELECT venta.id,id_usuario, SUM(cantidad_venta)As Cantidad_Ventas,
      //SUM(producto.precio_producto*detalle_venta.cantidad_venta)As Total_ventas
      //FROM venta
      //INNER JOIN detalle_venta ON venta.id = detalle_venta.venta_id_venta
      //INNER JOIN producto ON producto.id = detalle_venta.producto_id_producto
      //WHERE venta.id LIKE '2018-05-22%'
      //GROUP BY id_usuario
      $date = $request->date . "%";

      $seller_details = DB::table('venta')
    ->join('detalle_venta','venta.id','=','detalle_venta.venta_id_venta')
    ->join('producto','producto.id','=','detalle_venta.producto_id_producto')
    ->join('users','users.id','=','venta.id_usuario')
    ->select('users.name', DB::raw("SUM(cantidad_venta) AS cantidad_ventas"), DB::raw("SUM(producto.precio_producto*detalle_venta.cantidad_venta)As total_ventas"))
    ->where('venta.id', 'LIKE', $date)
    ->groupBy('id_usuario')
    ->get();

    $total1 = 0;
    $total2 = 0;

    foreach ($seller_details as $element) {
      $total1 += $element->cantidad_ventas;
      $total2 += $element->total_ventas;
    }

      return redirect()->route('ventas.index')->with('result',$seller_details)->with('date',$request->date)->with('products_sold',$total1)->with('total_sold',$total2);
    }

  }

?>
