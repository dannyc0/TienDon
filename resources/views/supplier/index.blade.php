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

@section('rowData')
  @foreach ($suppliers as $element)
    <tr>
      <td style="width:20%">{{$element['id']}}</td>
      <td style="width:30%">{{$element['nombre_proveedor']}}</td>
      <td style="width:30%">{{$element['telefono_proveedor']}}</td>
      <td style="width:20%">
        <button class="btn btn-outline-success" id="{{$element->id}}" onclick="updateRequest('Proveedor',this.id)" >
          <i class="fas fa-edit"></i>
        </button>
        <form action="{{action('SupplierController@destroy', $element['id'])}}" method="post" style="display:inline">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-outline-danger" id="{{$element->id}}">
              <i class="fas fa-trash-alt"></i>
            </button>
        </form>
      </td>
    </tr>
  @endforeach
@endsection
