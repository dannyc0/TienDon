<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;
  use View;
  use App\Producto;
  use App\Categoria;
  use App\Proveedor;
  use Illuminate\Http\Request;

  class ProductController extends Controller{

    public function index(){
      $products= Producto::all();

      $products_sum = Producto::all()->count();

      $categories = Categoria::all();

      $suppliers = Proveedor::all();

      return View::make('products.index',compact('products','products_sum','categories','suppliers'));
    }

    public function store(Request $request){
      if($request->reqType == "add"){
        $product = new Producto();
        $product->id=$request->id;
        $product->categoria_id_categoria1=$request->category;
        $product->proveedor_id_proveedor=$request->supplier;
        $product->nombre_producto=$request->name;
        $product->costo_producto=$request->cost;
        $product->precio_producto=$request->price;
        $product->cantidad_producto=0;
        $product->tipo_producto=$request->type;
        $product->presentacion_producto=$request->presentation;

        $message = 'Se ha creado de forma exitosa la categoría '.$request->name;
      }else{
        $product = Producto::find($request->id);
        $product->id=$request->id;
        $product->categoria_id_categoria1=$request->category;
        $product->proveedor_id_proveedor=$request->supplier;
        $product->nombre_producto=$request->name;
        $product->costo_producto=$request->cost;
        $product->precio_producto=$request->price;
        $product->cantidad_producto=0;
        $product->tipo_producto=$request->type;
        $product->presentacion_producto=$request->presentation;
        $message = 'Se ha actualizado de forma exitosa la categoría '.$request->name;
      }
      $products= Producto::all();
      $product->save();
      return redirect()->route('productos.index',compact('products'))->with('success',$message);
    }

    public function getAjaxData($id){
      $product = Producto::where(["id"=>$id])->get()->first();
      return response()->json([
          'myid' => $product->id,
          'categoria' => $product->categoria_id_categoria1,
          'marca' => $product->proveedor_id_proveedor,
          'nombre' => $product->nombre_producto,
          'presentacion' => $product->presentacion_producto,
          'tipo' => $product->tipo_producto ,
          'costo' => $product->costo_producto,
          'precio' => $product->precio_producto
      ]);
    }
  }//clase
?>
