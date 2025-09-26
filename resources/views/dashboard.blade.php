<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 fw-bold text-primary mb-0">
            {{ __('Panel de Control') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="container">

            {{-- Tarjeta de bienvenida --}}
            <div class="card shadow-sm mb-4">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="fw-bold">¡Bienvenido, {{ Auth::user()->name }}!</h5>
                        <p class="text-muted mb-0">Has iniciado sesión correctamente.</p>
                    </div>
                    <i class="fa-solid fa-user-shield fa-2x text-primary"></i>
                </div>
            </div>

            {{-- Secciones rápidas --}}
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-body text-center">
                            <i class="fa-solid fa-calendar-check fa-2x text-primary mb-3"></i>
                            <h6 class="fw-bold">Citas</h6>
                            <p class="text-muted small">Gestiona tus citas y agenda fácilmente.</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Ver más</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-body text-center">
                            <i class="fa-solid fa-users fa-2x text-primary mb-3"></i>
                            <h6 class="fw-bold">Pacientes</h6>
                            <p class="text-muted small">Consulta y administra la información de pacientes.</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Ver más</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-body text-center">
                            <i class="fa-solid fa-tooth fa-2x text-primary mb-3"></i>
                            <h6 class="fw-bold">Tratamientos</h6>
                            <p class="text-muted small">Accede a la lista de tratamientos y servicios.</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Ver más</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-body text-center">
                            <i class="fa-solid fa-chart-line fa-2x text-primary mb-3"></i>
                            <h6 class="fw-bold">Reportes</h6>
                            <p class="text-muted small">Visualiza métricas y reportes del sistema.</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
