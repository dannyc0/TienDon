@extends('inventory.master')


@section('productsSum',$products_sum)

@section('inventoryValue',$inventory_value->Total)

@section('categories')
    @foreach ($categories as $categorie)
      <option>{{$categorie['id_categoria']}}</option>
    @endforeach
@endsection

@section('products')
    @foreach ($products as $product)
      <option>{{$product['nombre_producto']}}</option>
    @endforeach
@endsection

