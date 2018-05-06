<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;
  use View;

  class DashboardController extends Controller{

    public function showDashboard(){
      return View::make('dashboard.index');//,compact());
    }

  }

?>
