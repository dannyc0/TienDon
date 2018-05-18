<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;
  use View;

  class DashboardController extends Controller{

    public function showDashboard(){

    	 $ganDa = 4688;
    	 $masVen = "CocaCola600ml";
      return View::make('dashboard.index',compact('ganDa','masVen'));


    }

  }

?>
