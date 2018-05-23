@extends('reports.master')


@section('titulo', 'Reportes')

@section('rowData')
	@foreach ($reportsV as $element)
      <td>{{$element[0]}}</td>
    @endforeach
@endsection

@section('rowData2')
	@foreach ($reportsV as $element)
      <td>{{$element[1]}}</td>
    @endforeach
@endsection
@section('rowData3')
	@foreach ($reportsV as $element)
      <td>{{$element[2]}}</td>
    @endforeach
@endsection
@section('date')
  @if($date = Session::get('date'))
    {{$date}}
  @endif
@endsection