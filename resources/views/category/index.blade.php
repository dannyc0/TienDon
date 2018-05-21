@extends('category.master')

@section('categoriesSum',$categories_sum)

@section('message')
  @if($message = Session::get('success'))
    <div class="alert alert-success text-center">
      <p>{{ $message }}</p>
    </div>
  @endif
@endsection

@section('rowData')
  @foreach ($categories as $category)
    <tr>
      <td style="width:15%" class="id">{{$category['id']}}</td>
      <td style="width:25%" class="nombre">{{$category['nombre_categoria']}}</td>
      <td style="width:40%" class="descripcion">{{$category['descripcion_categoria']}}</td>
      <td style="width:20%">
        <button class="btn btn-outline-success" id="{{$category->id}}" onclick="updateRequest('Categoría',this.id)" >
          <i class="fas fa-edit"></i>
        </button>
        <form action="{{action('CategoryController@destroy', $category['id'])}}" method="post" style="display:inline">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-outline-danger" id="{{$category->id}}">
              <i class="fas fa-trash-alt"></i>
            </button>
        </form>
      </td>
    </tr>
  @endforeach
@endsection
