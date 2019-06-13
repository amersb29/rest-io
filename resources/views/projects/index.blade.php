@extends('layout')
@section('title', 'Projects')
@section('content')
  <h1>Projects</h1>

  <table class="table">
    <!-- @isset($portfolio)
      @foreach ($portfolio as $pItem)
        <li> {{$pItem->title }} </li>
      @endforeach
    @else
      <li>No hay proyectos para mostrar</li>
    @endisset -->
    <thead>
      <tr>
        <th>Nombre del Proyecto</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($projects as $pItem)
        <tr>
          <td>
            <a href="{{ route('projects.show', $pItem->id) }}">{{$pItem->title }}</a>
            <small>{{ $loop->last ? 'Es el último': ''}}</small>
          </td>
          <td>
            <a class="btn btn-info btn-sm" href="{{ route('projects.edit', $pItem->id) }}">Editar</a>
            <form style="display: inline" action="{{ route('projects.destroy', $pItem->id) }}" method="post">
              @method('DELETE')
              @csrf
              <button class="btn btn-danger btn-sm" type="submit" >Eliminar</button>
            </form>
          </td>
        </tr>
      @empty
      <tr>
        <td>
          No hay proyectos para mostrar
        </td>
      </tr>
      @endforelse

      {{ $projects->links() }}
    </tbody>
  </table>
@endsection
