
<nav class="navbar navbar-expand-md navbar-light bg-faded sticky-top">
<!-- <a class="navbar-brand" href="#">{4:Navbar}</a> -->
  <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="collapse_target">

    <ul class="nav navbar-nav">
      <li class="nav-item {{ setActive('home') }}">
        <a class="nav-link" href="{{route('home') }}">@lang('Home')<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{ setActive('about') }}">
        <a class="nav-link" href="{{ route('about') }}">@lang('About')</a>
      </li>
      <li class="nav-item {{ setActive('contact') }}">
        <a class="nav-link" href="{{ route('contact') }}">@lang('Contact')</a>
      </li>

      @if(auth()->check())
      <li class="nav-item {{ setActive('projects*') }}">
        <a class="nav-link" href="{{ route('projects.create') }}">@lang('Projectos')</a>
      </li>
        @if(auth()->user()->hasRoles(['admin']) )
          <li class="nav-item {{ setActive('usuarios*') }}">
            <a class="nav-link" href="{{ route('usuarios.index') }}">@lang('Users')</a>
          </li>
        @endif
      @endif

      @if(auth()->guest())
      <li class="nav-item {{ setActive('login') }}">
        <a class="nav-link" href="{{ route('login') }}">@lang('Login')</a>
      </li>
      @else
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">
          {{ auth()->user()->name }}
          <span class="caret"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdown_target">
          <!-- <ul class="navbar-nav"> -->
            <a class="nav-link" href="/usuarios/{{ auth()->user()->id }}/edit">Mi cuenta</a>
            <a class="nav-link" href="{{ route('logout') }}">Cerrar sesión</a>

            <!-- <a class="dropdown-item" href="#">link 1</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">link 1</a>
            <a class="dropdown-item" href="#">link 1</a> -->
          <!-- </ul> -->
        </div>
      </li>
      @endif
    </ul>
    <!-- <form class="form-inline navbar-form pull-right">
      <input class="form-control" type="text" placeholder="Search">
      <button class="btn btn-success-outline" type="submit">Search</button>
    </form> -->
  </div>
</nav>


<!-- <nav>
  <ul>
    <li class="{{ setActive('home') }}">
      <a href=" {{route('home') }}">@lang('Home')</a>
    </li>
    <li class="{{ setActive('about') }}">
      <a href="{{ route('about') }}">@lang('About')</a>
    </li>
    <li class="{{  setActive('contact') }}">
      <a href="{{ route('contact') }}">@lang('Contact')</a>
    </li>


    @if(auth()->check())
    <li class="{{  setActive('projects.create')  }}">
      <a href="{{ route('projects.create') }}">@lang('Projects')</a>
    </li>
    <li>
      <a href="{{ route('logout') }}">Cerrar sesión de {{ auth()->user()->email }}</a>
    </li>
    @endif

    @if(auth()->guest())
    <li class="{{  setActive('login')  }}">
      <a href=" {{ route('login') }}">Login</a>
    </li>
    @endif
  </ul>
</nav> -->
