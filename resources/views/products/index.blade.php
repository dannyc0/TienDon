@extends('products.master')

@section('productsSum',$products_sum)

@section('message')
  @if($message = Session::get('success'))
    <div class="alert alert-success text-center">
      <p>{{ $message }}</p>
    </div>
  @endif
@endsection

@section('categories')
    @foreach ($categories as $category)
      <option value="{{$category['id']}}">{{$category['nombre_categoria']}}</option>
    @endforeach
@endsection

@section('brands')
    @foreach ($suppliers as $supplier)
      <option value="{{$supplier['id']}}">{{$supplier['nombre_proveedor']}}</option>
    @endforeach
@endsection

@section('rowData')
    @foreach ($products as $element)
      <tr>
        <td style="width:15%">{{$element['id']}}</td>
        <td style="width:10%">{{$element['categoria_id_categoria1']}}</td>
        <td style="width:10%">{{$element['proveedor_id_proveedor']}}</td>
        <td style="width:15%">{{$element['nombre_producto']}}</td>
        <td style="width:15%">{{$element['presentacion_producto']}}</td>
        <td style="width:10%">{{$element['costo_producto']}}</td>
        <td style="width:10%">{{$element['precio_producto']}}</td>
        <td style="width:15%">
          <button class="btn btn-outline-success" id="{{$element->id}}" onclick="updateRequest('Producto',this.id)" >
            <i class="fas fa-edit"></i>
          </button>
        </td>
      </tr>
    @endforeach
@endsection
