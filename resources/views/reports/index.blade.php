@extends('reports.master')

@section('titulo', 'Reportes')

@section('rowData')
	@foreach ($reportsV as $element)
      <td>{{$element[0]}}</td>
      <td>{{$element[1]}}</td>
    @endforeach
@endsection
