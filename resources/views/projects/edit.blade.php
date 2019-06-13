@extends('layout')

@section('title', 'Projects')

@section('content')
  <h1>{{ __('Project')}}</h1>
  @if( session()->has('info') )
    <h3>{{ session('info') }}</h3>
  @else
    <form class="" action="{{ route('projects.update', $project->id) }}" method="post">
      @method('PUT')
      @csrf
      <div class="form-group">
        <input type="text" name="title" placeholder="Título..." value="{{ $project->title }}">
        {!! $errors->first('title', '<small>:message</small>') !!}
      </div>
      <div class="form-group">
        <input type="text" name="description" placeholder="Descripción..." value="{{ $project->description }}">
        {!! $errors->first('description', '<small>:message</small>') !!}
      </div>
      <button class="btn btn-primary" type="submit" name="button">@lang('Update')</button>
    </form>
  @endif
@endsection
