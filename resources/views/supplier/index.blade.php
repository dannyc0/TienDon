@extends('supplier.master')

@section('supplierSum',$suppliers_sum)

@section('code')
    @foreach ($suppliers as $supplier)
      <option>{{$supplier['id_proveedor']}}</option>
    @endforeach
@endsection

@section('name')
    @foreach ($suppliers as $supplier)
      <option>{{$supplier['nombre_proveedor']}}</option>
    @endforeach
@endsection

<!--@section('rowData')
    @foreach ($suppliers as $element)
      <td>{{$element[0]}}</td>
      <td>{{$element[1]}}</td>
      <td>{{$element[2]}}</td>
      <td>{{$element[3]}}</td>
    @endforeach
@endsection

-->
