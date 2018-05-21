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

  class ReportsController extends Controller{

    public function showReports(){

    	$ventas=DetalleVenta::all();
    	$products=Producto::all();
    	$reportsV=array(array("2018-05-14","Ventas","2018-05-15","Compras","2018-06-22","Inventario"));
      return View::make('reports.index',compact('reportsV','ventas','products'));//,compact());
    }

    public function pdf(){

    	$ventas=DetalleVenta::all();
    	$products=Producto::all();
    	$pdf = PDF::loadView('reports.generated', compact('products','ventas'));

        return $pdf->download('venta.pdf');

    }
    public function pdfCompra(){
    	$compras=DetalleCompra::all();
    	$products=Producto::all();
    	$pdf = PDF::loadView('reports.generatedb', compact('products','compras'));

    	return $pdf->download('compra.pdf');
    }

     public function pdfInv(){
 
    	$products=Producto::all();
    	$pdf = PDF::loadView('reports.generatedc', compact('products'));

    	return $pdf->download('inventario.pdf');
    }
    
  }


?>
