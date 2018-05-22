@extends('inventory.master')

@section('message')
  @if($message = Session::get('success'))
    <div class="alert alert-success text-center">
      <p>{{ $message }}</p>
    </div>
  @endif
@endsection

@section('productsSum',$products_sum)

@section('inventoryValue',$inventory_value->Total)

@section('rowData')
    @foreach ($inventory as $element)
      <tr>
        <td style="width:25%">{{$element['id']}}</td>
        <td style="width:30%">{{$element['nombre_producto']}}</td>
        <td style="width:15%">{{$element['precio_producto']}}</td>
        <td style="width:15%">{{$element['costo_producto']}}</td>
        <td style="width:15%">{{$element['cantidad_producto']}}</td>
      </tr>
    @endforeach
@endsection
