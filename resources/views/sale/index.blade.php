@extends('sale.master')

@section('totalSales',$total_sales)

@section('salesSum',$sales_sum)

@section('gain',$total_sales)

@section('rowData')
    @foreach ($seller_details as $element)
      <td>{{$element[0]}}</td>
      <td>{{$element[1]}}</td>
      <td>{{$element[2]}}</td>
      <td>{{$element[3]}}</td>
    @endforeach
@endsection
