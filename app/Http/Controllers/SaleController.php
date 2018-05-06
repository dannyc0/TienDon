<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;
  use View;

  class SaleController extends Controller{

    public function showSale(){
      $total_sales = 15;
      $sales_sum = 320;
      $gain = 280;
      $seller_details = array(array('2018-04-12','560','200','Andre Lizeth Calleja Quintanar'));
      return View::make('sale.index',compact('seller_details','total_sales','sales_sum','gain','products_sold'));
    }

  }

?>
