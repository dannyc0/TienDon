@extends('manage_users.master')

@section('usersSum',$users_sum)

@section('roles')
  @foreach ($roles as $rol)
    <option>{{$rol}}</option>
  @endforeach
@endsection

@section('rowData')
    @foreach ($users as $element)
      <td>{{$element[0]}}</td>
      <td>{{$element[1]}}</td>
      <td>{{$element[2]}}</td>
      <td>{{$element[3]}}</td>
      <td>{{$element[4]}}</td>
    @endforeach
@endsection

@section('rowData2')
    @foreach ($users as $element)
      <td>{{$element[1]}}</td>
      <td>{{$element[2]}}</td>
      <td>{{$element[3]}}</td>
    @endforeach
@endsection
