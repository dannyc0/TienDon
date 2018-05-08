<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;
  use View;

  class AboutController extends Controller{

    public function showAbout(){
      return View::make('about.index');//,compact());
    }

  }

?>
