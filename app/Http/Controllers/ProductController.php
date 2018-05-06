<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;
  use View;

  class ProductController extends Controller{

    public function showProduct(){
      $categories = ['Lacteos','Embutidos','Refrescos','Limpieza'];
      $brands = ['Coca-Cola','Gamesa','Alpura','Sabritas'];
      $products = array(array('LA002','Lácteos','Lala','Yomi Lala','200 ml','Pieza','$29','$50'));

      $products_sum = 135;

      return View::make('products.index',compact('categories','brands','products','products_sum'));
    }

  }
?>
