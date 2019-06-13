@extends('layout')

@section('title', 'Contact')

@section('content')
  <h1>{{ __('Contact')}}</h1>
  @if( session()->has('info') )
    <h3>{{ session('info') }}</h3>
  @else
    <form class="" action="{{ route('contact') }}" method="post">
      @csrf
      <div class="form-group">
        <input type="text" name="name" placeholder="Nombre..." value="{{ old('name') }}">
        {!! $errors->first('name', '<small>:message</small>') !!}
      </div>
      <div class="form-group">
        <input type="email" name="email" placeholder="Email..." value="{{ old('email') }}">
        {!! $errors->first('email', '<small>:message</small>') !!}
      </div>
      <div class="form-group">
        <input type="text" name="subject" placeholder="Asunto..." value="{{ old('subject') }}">
        {!! $errors->first('subject', '<small>:message</small>') !!}
      </div>
      <div class="form-group">
        <textarea name="content" rows="8" cols="80" placeholder="Mensaje..." value="{{ old('content') }}"></textarea>
        {!! $errors->first('content', '<small>:message</small>') !!}
      </div>
      <button class="btn btn-primary" type="submit" name="button">@lang('Send')</button>
    </form>
  @endif
@endsection
