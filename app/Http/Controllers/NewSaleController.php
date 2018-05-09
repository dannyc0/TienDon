<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;
  use View;

  class NewSaleController extends Controller{

    public function showNewSale(){
      $products = array(array('LA002','Lácteos','Lala','Yomi Lala','250ml','50','200'));

      return View::make('new_sale.index',compact('products'));
    }

  }

?>
