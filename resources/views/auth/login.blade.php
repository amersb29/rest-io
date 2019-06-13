@extends('layout')

@section('title', 'Login')

@section('content')
<h1>Login</h1>
  <form class="" action="/login" method="post">
    @csrf
    <div class="form-group">
      <input class="form-control" type="email" name="email" placeholder="Email">
    </div>

    <div class="form-group">
      <input class="form-control" type="password" name="password" placeholder="Password">
    </div>

    <button class="btn btn-primary" type="submit">Entrar</button>
  </form>
@endsection
