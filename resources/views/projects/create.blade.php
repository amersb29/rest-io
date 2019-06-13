@extends('layout')

@section('title', 'Projects')

@section('content')
  <h1>{{ __('Projects')}}</h1>
  @if( session()->has('info') )
    <h3>{{ session('info') }}</h3>
  @else
    <form action="{{ route('projects.store') }}" method="post">
      @csrf
      <div class="form-group">
        <input class="form-control" type="text" name="title" placeholder="Título..." value="{{ old('title') }}">
        {!! $errors->first('title', '<small>:message</small>') !!}
      </div>

      <div class="form-group">
        <input class="form-control" type="text" name="description" placeholder="Descripción..." value="{{ old('description') }}">
        {!! $errors->first('description', '<small>:message</small>') !!}
      </div>
      <button class="btn btn-primary" type="submit" name="button">@lang('Send')</button>
    </form>
  @endif
@endsection
