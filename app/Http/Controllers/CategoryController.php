<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;
  use View;
  use App\Categoria;
  use Illuminate\Http\Request;

  class CategoryController extends Controller{

    public function showCategory(){

    	$categorys=Categoria::all();

    	$products_sum = 5;

      return View::make('category.index', compact('categorys','products_sum'));//,compact());
    }

  }

?>
