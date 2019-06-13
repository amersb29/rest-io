@extends('layout')
@section('title', 'Inicio')
@section('content')
  <h1>Home</h1>

  Bienvenid@ {{ $nombre ?? 'Invitado' }}
@endsection
