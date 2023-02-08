<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title inertia>{{ config('app.name') }}</title>

  @includeIf('partials.favicon')

  <!-- Fonts -->
  @googlefonts('default')
  @googlefonts('code')

  <!-- Scripts -->
  @routes
  @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
  @inertiaHead
</head>

<body>
  <main>
    @inertia
  </main>
</body>

</html>
