<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;
  use View;

  class InventoryController extends Controller{

    public function showInventory(){
      $categories = ['Lacteos','Embutidos','Bebidas','Limpieza','Botana', 'Dulces'];
      $products = ['Yomi Lala','Coca cola','Fanta','Gansito'];
      $inventory = array(array('PE129','Lacteos','Lala','Yomi Lala','200ml','unidad','$12.00','$10.00','20'),array('PE459','Lacteos','Lala','Yomi Lala','200ml','unidad','$12.00','$10.00','20'));

      $products_sum = 811;
      $inventory_value = 19892;

      return View::make('inventory.index',compact('categories','products','inventory','products_sum','inventory_value'));
    }

  }

?>
