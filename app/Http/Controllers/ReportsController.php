<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;
  use View;

  class ReportsController extends Controller{

    public function showReports(){
    	$reportsV=array(array("2018-05-14","Ventas"));
      return View::make('reports.index',compact('reportsV'));//,compact());
    }

  }

?>
