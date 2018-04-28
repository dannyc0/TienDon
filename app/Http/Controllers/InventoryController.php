<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;

  class InventoryController extends Controller{

    public function showInventory(){
      return view('inventory');
    }

  }

?>
