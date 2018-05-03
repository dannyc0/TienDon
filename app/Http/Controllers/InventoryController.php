<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;
  Use View;

  class InventoryController extends Controller{

    public function showInventory(){
      $categories = ['Lacteos','Embutidos','Bebidas','Limpieza','Botana'];
      $products = ['Yomi Lala','Coca cola','Fanta','Gansito'];
      $inventory = array(array('PE129','Lacteos','Lala','Yomi Lala','200ml','unidad','$12.00','$10.00','20'));

      $products_sum = 50;

      return View::make('inventory.index',compact('categories','products','inventory'));
    }

  }

?>
