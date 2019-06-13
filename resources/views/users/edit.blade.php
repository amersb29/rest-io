@extends('layout')

@section('title', 'Users')

@section('content')
  <h1>{{ __('Users')}}</h1>
  @if( session()->has('info') )
    <div class="alert alert-success">{{ session('info') }}</div>
  @endif
    <form class="" action="{{ route('usuarios.update', $user->id) }}" method="post">
      @method('PUT')
      @csrf
      <div class="form-group">
        <input type="text" name="name" placeholder="Nombre" value="{{ $user->name }}">
        {!! $errors->first('name', '<small>:message</small>') !!}
      </div>
      <div class="form-group">
        <input type="text" name="email" placeholder="Email" value="{{ $user->email }}">
        {!! $errors->first('email', '<small>:message</small>') !!}
      </div>
      <button class="btn btn-primary" type="submit" name="button">@lang('Update')</button>
    </form>

@endsection
