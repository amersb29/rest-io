@extends('layout')

@section('title', 'Project')

@section('content')
  <h1>Project</h1>
  <p>T&iacute;tulo: {{ $project->title }}</p>
  <p>Descripci&oacute;n: {{ $project->description }}</p>
  <p>Fecha de creaci&oacute;n: {{ $project->created_at }}</p>
@endsection
