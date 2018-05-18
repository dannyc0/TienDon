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


<!--@section('products')
    @foreach ($products as $element)
      <td>{{$element[0]}}</td>
      <td>{{$element[1]}}</td>
      <td>{{$element[2]}}</td>
      <td>{{$element[3]}}</td>
      <td>{{$element[4]}}</td>
      <td>{{$element[5]}}</td>
      <td>{{$element[6]}}</td>
    @endforeach
@endsection

@section('rowData')
    @foreach ($products as $element)
      <td>{{$element[0]}}</td>
      <td>{{$element[3]}}</td>
      <td>{{$element[5]}}</td>
      <td>{{$element[6]}}</td>
    @endforeach
@endsection
-->