<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;
  use View;

  class ReportsController extends Controller{

    public function showReports(){
      return View::make('reports.master');//,compact());
    }

  }

?>
