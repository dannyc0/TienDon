@extends('new_sale.master')

@section('total','$200')

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
