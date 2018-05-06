@extends('supplier.master')

@section('supplierSum',$suppliers_sum)

@section('rowData')
    @foreach ($suppliers as $element)
      <td>{{$element[0]}}</td>
      <td>{{$element[1]}}</td>
      <td>{{$element[2]}}</td>
      <td>{{$element[3]}}</td>
    @endforeach
@endsection
