@extends('category.master')

@section('productsSum',$products_sum)

@section('code')
    @foreach ($categorys as $category)
      <option>{{$category['id_categoria']}}</option>
    @endforeach
@endsection

@section('name')
    @foreach ($categorys as $category)
      <option>{{$category['nombre_categoria']}}</option>
    @endforeach
@endsection

