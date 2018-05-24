<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;
  use View;
  use App\DetalleCompra;
  use App\DetalleVenta;
  use App\Compra;
  use App\Venta;
  use App\Producto;
  use Barryvdh\DomPDF\Facade as PDF;
  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\DB;
  use Illuminate\Http\Respnse;

  class ReportsController extends Controller{

    public function showReports(){

    	$ventas=DetalleVenta::all();
    	$products=Producto::all();
    	$reportsV=array(array("Ventas","Compras","Inventario"));
      return View::make('reports.index',compact('reportsV','ventas','products'));//,compact());
    }

    public function pdf($date){
      $date=$date . "%";
    	//$date= date('Y-m-d');
    	//$ventas=DetalleVenta::all();
    	//$products=Producto::all();
      $ventas=
      DB::table('detalle_venta')
      ->join('producto','producto.id','=','detalle_venta.producto_id_producto')
      ->select('venta_id_venta','producto.nombre_producto as nombre','cantidad_venta')
      ->where('venta_id_venta','LIKE',$date)
      ->get();
    	$pdf = PDF::loadView('reports.generated', compact('products','ventas', 'date'));

        return $pdf->download('venta.pdf');

    }
    public function pdfCompra($date){
      $date=$date . "%";
    	//$date= date('Y-m-d');
    	//$compras=DetalleCompra::all();
    	//$products=Producto::all();
      $compras=
      DB::table('detalle_compra')
      ->join('producto','producto.id','=','detalle_compra.producto_id_producto')
      ->select('compra_id_compra','producto.nombre_producto as nombre','cantidad_compra')
      ->where('compra_id_compra','LIKE',$date)
      ->get();
    	$pdf = PDF::loadView('reports.generatedb', compact('products','compras','date'));

    	return $pdf->download('compra.pdf');
    }

     public function pdfInv(){
 		$date= date('Y-m-d');
    	$products=Producto::all();
    	$pdf = PDF::loadView('reports.generatedc', compact('products','date'));

    	return $pdf->download('inventario.pdf');
    }
    
  }


?>
