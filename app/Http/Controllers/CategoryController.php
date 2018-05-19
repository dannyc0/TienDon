<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;
  use View;
  use App\Categoria;
  use Illuminate\Http\Request;

  class CategoryController extends Controller{

    public function showCategory(){

    	$categorys=Categoria::all();

    	$categories_sum = Categoria::all()->count();

      return View::make('category.index', compact('categorys','categories_sum'));//,compact());
    }

  }

?>
