<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Clínica Dental') }}</title>

    {{-- Cargar Bootstrap y FontAwesome desde Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light d-flex flex-column min-vh-100">

    {{-- Navbar principal (igual que el público) --}}
    @include('components.navbar')

    {{-- Encabezado del Dashboard --}}
    @isset($header)
        <header class="bg-white shadow-sm">
            <div class="container py-3">
                {{ $header }}
            </div>
        </header>
    @endisset

    {{-- Contenido principal --}}
    <main class="flex-fill py-4">
        {{ $slot }}
    </main>

    {{-- Footer principal --}}
    @include('components.footer')

</body>
</html>
