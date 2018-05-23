@extends('sale.master')

@section('totalSales',$total_sales)

@section('salesSum',$sales_sum->Total)

@section('gain',$gain->Ganancia)


@section('rowData')
  @if($seller_details = Session::get('result'))
    @foreach ($seller_details as $element)
      <tr>
        <td>{{$element->name}}</td>
        <td>{{$element->cantidad_ventas}}</td>
        <td>{{$element->total_ventas}}</td>
      </tr>
    @endforeach
  @endif
@endsection

@section('date')
  @if($date = Session::get('date'))
    {{$date}}
  @endif
@endsection

@section('totalVentas')
  @if($products_sold = Session::get('products_sold'))
    {{$products_sold}}
  @endif
@endsection

@section('totalGanancias')
  @if($total_sold = Session::get('total_sold'))
    {{$total_sold}}
  @endif
@endsection
