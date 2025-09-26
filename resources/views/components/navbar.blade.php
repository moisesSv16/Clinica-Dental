<nav id="mainNav" class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
  <div class="container">

    {{-- Logo --}}
    <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="{{ route('home') }}">
      <i class="fa-solid fa-tooth fa-lg text-primary"></i> Clínica Dental
    </a>

    {{-- Botón hamburguesa (móvil) --}}
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent"
      aria-controls="navContent" aria-expanded="false" aria-label="Abrir menú">
      <span class="navbar-toggler-icon"></span>
    </button>

    {{-- Menú principal --}}
    <div class="collapse navbar-collapse" id="navContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">

        {{-- Páginas públicas --}}
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('home') ? 'active fw-bold text-primary' : '' }}"
             href="{{ route('home') }}">
            Inicio
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('about') ? 'active fw-bold text-primary' : '' }}"
             href="{{ route('about') }}">
            Sobre Nosotros
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('team') ? 'active fw-bold text-primary' : '' }}"
             href="{{ route('team') }}">
            Equipo
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('contact') ? 'active fw-bold text-primary' : '' }}"
             href="{{ route('contact') }}">
            Contacto
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('faq') ? 'active fw-bold text-primary' : '' }}"
             href="{{ route('faq') }}">
            FAQ
          </a>
        </li>

        {{-- Dropdown de Servicios --}}
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ request()->routeIs('services.*') ? 'active fw-bold text-primary' : '' }}"
             href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Servicios
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item {{ request()->routeIs('services.index') ? 'active fw-bold text-primary' : '' }}" href="{{ route('services.index') }}">Todos los Servicios</a></li>
            <li><a class="dropdown-item {{ request()->routeIs('services.ortodoncia') ? 'active fw-bold text-primary' : '' }}" href="{{ route('services.ortodoncia') }}">Ortodoncia</a></li>
            <li><a class="dropdown-item {{ request()->routeIs('services.endodoncia') ? 'active fw-bold text-primary' : '' }}" href="{{ route('services.endodoncia') }}">Endodoncia</a></li>
            <li><a class="dropdown-item {{ request()->routeIs('services.limpieza') ? 'active fw-bold text-primary' : '' }}" href="{{ route('services.limpieza') }}">Limpieza Dental</a></li>
            <li><a class="dropdown-item {{ request()->routeIs('services.implantes') ? 'active fw-bold text-primary' : '' }}" href="{{ route('services.implantes') }}">Implantes</a></li>
            <li><a class="dropdown-item {{ request()->routeIs('services.estetica') ? 'active fw-bold text-primary' : '' }}" href="{{ route('services.estetica') }}">Estética Dental</a></li>
          </ul>
        </li>

        {{-- Login / Registro o Dashboard --}}
{{-- Login / Registro o Dashboard --}}
@auth
  {{-- Botón Dashboard --}}
  <li class="nav-item ms-lg-3">
    <a class="btn btn-primary" href="{{ route('dashboard') }}">
      <i class="fa-solid fa-gauge me-1"></i> Dashboard
    </a>
  </li>

  {{-- Dropdown de usuario --}}
  <li class="nav-item dropdown ms-lg-3">
    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button"
       data-bs-toggle="dropdown" aria-expanded="false">
       <i class="fa-solid fa-user-circle me-1"></i> {{ Auth::user()->name }}
    </a>
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
      <li>
        <a class="dropdown-item" href="{{ route('profile.edit') }}">
          <i class="fa-solid fa-id-card me-1"></i> Perfil
        </a>
      </li>
      <li>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="dropdown-item">
            <i class="fa-solid fa-right-from-bracket me-1"></i> Cerrar sesión
          </button>
        </form>
      </li>
    </ul>
  </li>
@else
  {{-- Invitados --}}
  <li class="nav-item ms-lg-3">
    <a class="btn btn-outline-primary me-2 {{ request()->routeIs('login') ? 'active fw-bold' : '' }}"
       href="{{ route('login') }}">
      <i class="fa-solid fa-right-to-bracket me-1"></i> Login
    </a>
  </li>
  <li class="nav-item">
    <a class="btn btn-primary {{ request()->routeIs('register') ? 'active fw-bold' : '' }}"
       href="{{ route('register') }}">
      <i class="fa-solid fa-user-plus me-1"></i> Registro
    </a>
  </li>
@endauth


      </ul>
    </div>
  </div>
</nav>
