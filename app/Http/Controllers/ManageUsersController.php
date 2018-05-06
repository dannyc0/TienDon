<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;
  use View;

  class ManageUsersController extends Controller{

    public function showManagement(){
      $users = array(array('CAQA961130MDFLNN02','Andrea Lizeth','Calleja','Quintanar','Administrador'));
      $roles = ['Administrador','Cajero','Otro'];
      $users_sum = 6;
      return View::make('manage_users.index',compact('users','roles','users_sum'));
    }

  }

?>
