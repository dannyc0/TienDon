@extends('reports.master')


@section('titulo', 'Reportes')

@section('rowData')
	@foreach ($reportsV as $element)
      <td>{{$element[0]}}</td>
      <td>{{$element[1]}}</td>
    @endforeach
@endsection

@section('rowData2')
	@foreach ($reportsV as $element)
      <td>{{$element[2]}}</td>
      <td>{{$element[3]}}</td>
    @endforeach
@endsection
@section('rowData3')
	@foreach ($reportsV as $element)
      <td>{{$element[4]}}</td>
      <td>{{$element[5]}}</td>
    @endforeach
@endsection