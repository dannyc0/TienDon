<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;
  use View;
  use App\Producto;
  use App\Categoria;
  use Illuminate\Http\Request;

  class ProductController extends Controller{

    public function showProduct(){

      $products= Producto::all();
     
      //$products = array(array('LA002','Lácteos','Lala','Yomi Lala','200 ml','Pieza','$29','$50'));

      $products_sum = Producto::all()->count();

      return View::make('products.index',compact('products','products_sum'));

    }



  }//clase
?>
