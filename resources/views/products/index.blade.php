@extends('products.master')

@section('productsSum',$products_sum)

@section('categories')
    @foreach ($categories as $category)
      <option>{{$category}}</option>
    @endforeach
@endsection

@section('brands')
    @foreach ($brands as $brand)
      <option>{{$brand}}</option>
    @endforeach
@endsection

@section('rowData')
    @foreach ($products as $element)
      <td>{{$element[0]}}</td>
      <td>{{$element[1]}}</td>
      <td>{{$element[2]}}</td>
      <td>{{$element[3]}}</td>
      <td>{{$element[4]}}</td>
      <td>{{$element[5]}}</td>
      <td>{{$element[6]}}</td>
      <td>{{$element[7]}}</td>
    @endforeach
@endsection
