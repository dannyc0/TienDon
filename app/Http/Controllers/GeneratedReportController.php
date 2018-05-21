<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;
  use View;
  use App\Producto;
  use App\DetalleVenta;
  use App\Venta;
  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\DB;

  class GeneratedReportController extends Controller{

    public function showReport(){
      return View::make('reports.generated');//,compact('));
    }

  }

?>
