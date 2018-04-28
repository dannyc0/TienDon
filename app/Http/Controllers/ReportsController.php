<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;

  class ReportsController extends Controller{

    public function showReports(){
      return view('reports');
    }

  }

?>
