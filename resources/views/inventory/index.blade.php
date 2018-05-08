@extends('inventory.master')

@section('productsSum',$products_sum)

@section('inventoryValue',$inventory_value)

@section('categories')
    @foreach ($categories as $category)
      <option>{{$category}}</option>
    @endforeach
@endsection

@section('products')
    @foreach ($products as $product)
      <option>{{$product}}</option>
    @endforeach
@endsection

@section('rowData')
    @foreach ($inventory as $element)
      <tr>
        <td>{{$element[0]}}</td>
        <td>{{$element[1]}}</td>
        <td>{{$element[2]}}</td>
        <td>{{$element[3]}}</td>
        <td>{{$element[4]}}</td>
        <td>{{$element[5]}}</td>
        <td>{{$element[6]}}</td>
        <td>{{$element[7]}}</td>
        <td>{{$element[8]}}</td>
      </tr>
    @endforeach
@endsection
