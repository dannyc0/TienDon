<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;

  class NewSaleController extends Controller{

    public function showNewSale(){
      return view('new_sale');
    }

  }

?>
