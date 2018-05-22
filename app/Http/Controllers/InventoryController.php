<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;
  use View;
  use App\Categoria;
  use App\Producto;
  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\DB;

  class InventoryController extends Controller{

    public function index(){
      $inventory = Producto::all();

      //$products_sum = Producto::all()->count();
      $products_sum=DB::table('producto')
      ->select(DB::raw('SUM(cantidad_producto) as Total'))
      ->first();
      $inventory_value = DB::table('producto')
      ->select(DB::raw('SUM(costo_producto*cantidad_producto) as Total'))
      ->first();

      return View::make('inventory.index',compact('products_sum','inventory_value','inventory'));
    }

    public function store(Request $request){
      $model = Producto::find( $request->id );
      $model->cantidad_producto += $request->quantity;
      $model->save();

      $inventory = Producto::all();

      $message = 'Se ha agregado de forma exitosa '. $request->quantity .' existencias del producto '.$request->name;

      return redirect()->route('inventario.index',compact('inventory'))->with('success',$message);

    }

    public function getAjaxData($id){
      $inventory = Producto::where(["id"=>$id])->get()->first();
      return response()->json([
          'nombre' => $inventory->nombre_producto,
          'presentacion' => $inventory->presentacion_producto,
          'tipo' => $inventory->tipo_producto
      ]);
    }

  }

?>
