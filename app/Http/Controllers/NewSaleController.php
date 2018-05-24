<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;
  use View;
  use App\Producto;
  use Illuminate\Http\Request;

  class NewSaleController extends Controller{

    public function showNewSale(){

      $products=Producto::all();

      return View::make('new_sale.index',compact('products'));
    }

    public function getAjaxData($id){
      $product = Producto::where(["id"=>$id])->get()->first();
      return response()->json([
          'myid' => $product->id,
          'nombre' => $product->nombre_producto,
          'precio' => $product->precio_producto
      ]);
    }

  }

?>
