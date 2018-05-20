<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;
  use View;
  use App\Categoria;
  use App\Producto;
  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\DB;

  class InventoryController extends Controller{

    public function showInventory(){
     $categories = Categoria::all();
      $products = Producto::all();
     // $inventory = array(array('PE129','Lacteos','Lala','Yomi Lala','200ml','unidad','$12.00','$10.00','20'),array('PE459','Lacteos','Lala','Yomi Lala','200ml','unidad','$12.00','$10.00','20'));

      $products_sum = Producto::all()->count();
      $inventory_value = DB::table('producto')
      ->select(DB::raw('SUM(costo_producto) as Total'))
      ->first();

      return View::make('inventory.index',compact('categories','products','products_sum','inventory_value'));
    }

  }

?>
