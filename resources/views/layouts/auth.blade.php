<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Acceso - Clínica Dental')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light d-flex flex-column min-vh-100">

  {{-- Navbar principal (igual al público) --}}
  @include('components.navbar')

  {{-- Contenido centrado --}}
  <main class="flex-fill d-flex align-items-center justify-content-center py-5">
    <div class="w-100" style="max-width: 420px;">
      @yield('content')
    </div>
  </main>

  {{-- Footer --}}
  @include('components.footer')

</body>
</html>
