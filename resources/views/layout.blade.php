<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'App')</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('partials.nav')

    <div class="container">
      @yield('content')
    </div>

    <script src="/js/app.js"></script>
  </body>
</html>
