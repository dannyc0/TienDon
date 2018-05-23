<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;
  use App\Proveedor;
  use Illuminate\Http\Request;
  use View;

  class SupplierController extends Controller{

    public function index(){
      $suppliers_sum = Proveedor::all()->count();
      $suppliers=Proveedor::all();
      return View::make('supplier.index',compact('suppliers','suppliers_sum'));
    }

    public function store(Request $request){
      if($request->reqType == "add"){
        $supplier = new Proveedor();

        $message = 'Se ha creado de forma exitosa el proveedor '.$request->name;
      }else{
        $supplier = Proveedor::find($request->id);

        $message = 'Se ha actualizado de forma exitosa la categoría '.$request->name;
      }
      $supplier->id=$request->id;
      $supplier->nombre_proveedor=$request->name;
      $supplier->telefono_proveedor=$request->telephone;

      $suppliera = Proveedor::all();
      $supplier->save();
      return redirect()->route('proveedores.index',compact('suppliers'))->with('success',$message);
    }

    public function getAjaxData($id){
      $supplier = Proveedor::where(["id"=>$id])->get()->first();
      return response()->json([
          'myid' => $supplier->id,
          'nombre' => $supplier->nombre_proveedor,
          'telefono' => $supplier->telefono_proveedor
      ]);
    }
    public function destroy($id){
      $supplier = Proveedor::find($id);
      $message = 'Se ha borrado de forma exitosa';
      $supplier->delete();
      $supplier=Proveedor::all();
      return redirect()->route('proveedores.index',compact('suppliers'))->with('success',$message);
    }

  }

?>
