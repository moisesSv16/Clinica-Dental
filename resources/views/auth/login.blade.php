@extends('layouts.auth')

@section('title', 'Iniciar Sesión - Clínica Dental')

@section('content')
<div class="card shadow-sm">
  <div class="card-body p-4">
    <h4 class="fw-bold text-center mb-4">Iniciar Sesión</h4>

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
    <form method="POST" action="{{ route('login') }}">
      @csrf

      <div class="mb-3">
        <label for="email" class="form-label">Correo electrónico</label>
        <input type="email" id="email" name="email" class="form-control" required autofocus>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" id="password" name="password" class="form-control" required>
      </div>

      <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="form-check">
          <input type="checkbox" name="remember" id="remember" class="form-check-input">
          <label class="form-check-label" for="remember">Recordarme</label>
        </div>
        <a href="{{ route('password.request') }}" class="text-decoration-none">¿Olvidaste tu contraseña?</a>
      </div>

      <button type="submit" class="btn btn-primary w-100">
        <i class="fa-solid fa-right-to-bracket me-1"></i> Entrar
      </button>
    </form>

    <p class="text-center mt-3 mb-0">
      ¿No tienes cuenta? 
      <a href="{{ route('register') }}" class="text-decoration-none fw-bold">Regístrate aquí</a>
    </p>
  </div>
</div>
@endsection
