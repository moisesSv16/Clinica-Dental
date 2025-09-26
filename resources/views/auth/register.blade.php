@extends('layouts.auth')

@section('title', 'Registro - Clínica Dental')

@section('content')
<div class="card shadow-sm">
  <div class="card-body p-4">
    <h4 class="fw-bold text-center mb-4">Crear Cuenta</h4>

    {{-- Mensajes de error --}}
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    {{-- Formulario --}}
    <form method="POST" action="{{ route('register') }}">
      @csrf

      <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" id="name" name="name" class="form-control" required autofocus>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Correo electrónico</label>
        <input type="email" id="email" name="email" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" id="password" name="password" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="password_confirmation" class="form-label">Confirmar contraseña</label>
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
      </div>

      <button type="submit" class="btn btn-success w-100">
        <i class="fa-solid fa-user-plus me-1"></i> Registrarse
      </button>
    </form>

    <p class="text-center mt-3 mb-0">
      ¿Ya tienes cuenta?
      <a href="{{ route('login') }}" class="text-decoration-none fw-bold">Inicia sesión aquí</a>
    </p>
  </div>
</div>
@endsection
