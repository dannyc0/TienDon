<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;
  use App\User;
  use Illuminate\Http\Request;
  use View;

  class PersonalInfoController extends Controller{

    public function showPersonalInfo(){

      return View::make('personalInfo.master');

    }

    public function updatePersonalInfo(Request $request){
      User::find($request->id)->update($request->all());
      $message = 'Se ha actualizado su informacion personal de forma exitosa';

      return redirect()->route('indexPersonalInfo')->with('success',$message);
    }

  }

?>
