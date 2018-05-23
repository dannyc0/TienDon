<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;
  use View;
  use App\User;
  use Illuminate\Http\Request;

  class ManageUsersController extends Controller{

    public function index(){
      $users = User::all();
      $users_sum = User::all()->count();
      return View::make('manage_users.index',compact('users','users_sum'));
    }

    public function store(Request $request){
      $user= User::find($request->id);
      $user->role_id=$request->role_id;
      $message = 'Se ha actualizado de forma exitosa el rol de ' . $user->name;
      $users=User::all();

      $user->save();
      return redirect()->route('administrarUsuarios.index',compact('users'))->with('success',$message);
    }

    public function getAjaxData($id){
      $user = User::where(["id"=>$id])->get()->first();
      return response()->json([
          'myid' => $user->id,
          'nombre' => $user->name,
          'primer_apellido' => $user->first_surname,
          'segundo_apellido' => $user->second_surname,
          'rol' => $user->role_id
      ]);
    }

  }

?>
