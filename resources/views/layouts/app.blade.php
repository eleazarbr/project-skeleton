<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title') &#8212; {{ config('app.name') }}</title>
  @includeIf('partials.favicon')

  @vite('resources/js/app.js')
</head>

<body>
  <main>
    @yield('content')
  </main>

  @stack('scripts')
</body>

</html>
