@extends('manage_users.master')

@section('usersSum',$users_sum)

@section('roles')
  <option value="1">Administrador</option>
  <option value="2">Cajero</option>
@endsection

@section('rowData')
    @foreach ($users as $element)
      <tr>
        <td>{{$element->name}}</td>
        <td>{{$element->first_surname}}</td>
        <td>{{$element->second_surname}}</td>
        <td>{{{$element->role_id==1 ? 'Administrador' : 'Cajero' }}}</td>
        <td>
          <button class="btn btn-outline-success" id="{{$element->id}}" onclick="updateRequest('Usuario',this.id)" >
            <i class="fas fa-edit"></i>
          </button>
        </td>
      </tr>
    @endforeach
@endsection
