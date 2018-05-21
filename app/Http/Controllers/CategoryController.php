<?php
  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;
  use View;
  use App\Categoria;
  use Illuminate\Http\Request;

  class CategoryController extends Controller{

    public function index(){
    	$categories_sum = Categoria::all()->count();
      $categories=Categoria::all();

      return View::make('category.index', compact('categories','categories_sum'));
    }

    public function store(Request $request){
      if($request->reqType == "add"){
        $category = new Categoria();
        $category->id=$request->id;
        $category->nombre_categoria=$request->nombre_categoria;
        $category->descripcion_categoria=$request->descripcion_categoria;
        $message = 'Se ha creado de forma exitosa la categoría '.$request->nombre_categoria;
      }else{
        $category= Categoria::find($request->id);
        $category->nombre_categoria=$request->nombre_categoria;
        $category->descripcion_categoria=$request->descripcion_categoria;
        $message = 'Se ha actualizado de forma exitosa la categoría '.$request->nombre_categoria;
        $categories=Categoria::all();
      }

      $category->save();
      return redirect()->route('categorias.index',compact('categories'))->with('success',$message);
    }

    public function getAjaxData($id){
      $category = Categoria::where(["id"=>$id])->get()->first();
      return response()->json([
          'myid' => $category->id,
          'nombre' => $category->nombre_categoria,
          'desc' => $category->descripcion_categoria
      ]);
    }

    public function destroy($id){
      $category = Categoria::find($id);
      $message = 'Se ha borrado de forma exitosa la categoría '.$category->nombre_categoria;
      $category->delete();
      $categories=Categoria::all();
      return redirect()->route('categorias.index',compact('categories'))->with('success',$message);
    }

  }

?>
