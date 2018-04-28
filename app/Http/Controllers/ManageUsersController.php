<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;

  class ManageUsersController extends Controller{

    public function showManagement(){
      return view('manage_users');
    }

  }

?>
