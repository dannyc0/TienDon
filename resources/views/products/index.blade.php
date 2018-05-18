@extends('products.master')

@section('productsSum',$products_sum)

@section('code')
    @foreach ($products as $product)
      <option>{{$product['id_producto']}}</option>
    @endforeach
@endsection

@section('name')
    @foreach ($products as $product)
      <option>{{$product['nombre_producto']}}</option>
    @endforeach
@endsection

@section('rowData')
    @foreach ($products as $element)

    @endforeach
@endsection
