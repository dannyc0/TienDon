<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;
  use View;

  class PersonalInfoController extends Controller{

    public function showPersonalInfo(){

      return View::make('personalInfo.index');//,compact('ganDa','masVen'));


    }

  }

?>
