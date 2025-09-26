<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Clínica Dental')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

  {{-- Navbar --}}
  @include('components.navbar')

  {{-- Hero (opcional, solo en home) --}}
  @yield('hero')

  {{-- Contenido dinámico --}}
  <main>
    @yield('content')
  </main>

  {{-- Footer --}}
  @include('components.footer')

</body>
</html>
