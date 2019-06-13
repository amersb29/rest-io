@extends('layout')

@section('title', 'Users')

@section('content')
  <h1>{{ $user->name }}</h1>
  <table class="table">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Email</th>
        <th>Roles</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            @foreach($user->roles as $rol)
              {{ $rol->display_name }}
            @endforeach
        </td>
      </tr>
    </tbody>
  </table>

  @can('edit', $user)
    <a class="btn btn-info" href="{{ route('usuarios.edit', $user->id )}}">Editar</a>
  @endcan
  
  @can('destroy', $user)
  <form style="display: inline" action="{{ route('usuarios.destroy', $user->id) }}" method="post">
    @method('DELETE')
    @csrf
    <button class="btn btn-danger" type="submit" >Eliminar</button>
  </form>
  @endcan

@endsection
