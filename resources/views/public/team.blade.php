 
@extends('layouts.public')

@section('title', 'Nuestro Equipo - Clínica Dental')

@section('content')
<section class="py-5">
    <div class="container">
        <h2 class="fw-bold text-center mb-4">Conoce a Nuestro Equipo</h2>
        <p class="text-center text-muted mb-5">Profesionales altamente capacitados en distintas especialidades odontológicas.</p>

        <div class="row g-4">
            <div class="col-md-3">
                <div class="card shadow-sm text-center">
                    <img src="https://images.unsplash.com/photo-1550831107-1553da8c8464?q=80&w=800" 
                         class="card-img-top" alt="Doctor 1">
                    <div class="card-body">
                        <h5 class="card-title">Dra. Ana Pérez</h5>
                        <small class="text-muted">Odontóloga General</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm text-center">
                    <img src="https://images.unsplash.com/photo-1544006659-f0b21884ce1d?q=80&w=800" 
                         class="card-img-top" alt="Doctor 2">
                    <div class="card-body">
                        <h5 class="card-title">Dr. Luis Romero</h5>
                        <small class="text-muted">Ortodoncista</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm text-center">
                    <img src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?q=80&w=800" 
                         class="card-img-top" alt="Doctor 3">
                    <div class="card-body">
                        <h5 class="card-title">Dra. Sofía Núñez</h5>
                        <small class="text-muted">Periodoncista</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm text-center">
                    <img src="https://images.unsplash.com/photo-1525134479668-1bee5c7c6845?q=80&w=800" 
                         class="card-img-top" alt="Doctor 4">
                    <div class="card-body">
                        <h5 class="card-title">Dr. Marco Díaz</h5>
                        <small class="text-muted">Implantólogo</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
