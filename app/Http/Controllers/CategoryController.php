<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;
  use View;

  class CategoryController extends Controller{

    public function showCategory(){

      return View::make('category.index');//,compact());
    }

  }

?>
