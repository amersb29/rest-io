@extends('layout')

@section('content')
  <h1>Usuarios</h1>

  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Rol</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($users as $usr)
        <tr>
          <td>
            {{$usr->id }}
          </td>
          <td>
            {{$usr->name }}
          </td>
          <td>
            {{$usr->email }}
          </td>
          <td>
            {{ $usr->roles->pluck('display_name')->implode(', ') }}
          </td>

          <td>
            <a class="btn btn-info btn-sm" href="{{ route('usuarios.edit', $usr->id) }}">Editar</a>
            <form style="display: inline" action="{{ route('usuarios.destroy', $usr->id) }}" method="post">
              @method('DELETE')
              @csrf
              <button class="btn btn-danger btn-sm" type="submit" >Eliminar</button>
            </form>
          </td>
        </tr>
      @empty
      <tr>
        <td>
          No hay usuarios para mostrar
        </td>
      </tr>
      @endforelse
    </tbody>
  </table>
@endsection
