<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;
  use App\Proveedor;
  use Illuminate\Http\Request;
  use View;

  class SupplierController extends Controller{

    public function showSupplier(){
      $suppliers_sum = 19;

      $suppliers=Proveedor::all();

      //$suppliers = array(array('AS001','Gamesa','5515826822','X'));
      return View::make('supplier.index',compact('suppliers','suppliers_sum'));
    }

  }

?>
