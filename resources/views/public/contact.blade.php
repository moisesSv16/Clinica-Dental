 
@extends('layouts.public')

@section('title', 'Contacto - Clínica Dental')

@section('content')
<section class="py-5">
    <div class="container">
        <h2 class="fw-bold text-center mb-4">Contáctanos</h2>
        <p class="text-center text-muted mb-5">Déjanos tu mensaje y te responderemos lo antes posible.</p>

        <div class="row g-4">
            <!-- Formulario -->
            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Nombre</label>
                                <input type="text" class="form-control" placeholder="Tu nombre">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Correo</label>
                                <input type="email" class="form-control" placeholder="correo@ejemplo.com">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Mensaje</label>
                                <textarea class="form-control" rows="4"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="fa-solid fa-paper-plane me-2"></i> Enviar
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Mapa -->
            <div class="col-lg-6">
                <div class="ratio ratio-16x9 shadow-sm rounded">
                    <iframe src="https://www.google.com/maps?q=Clínica%20Dental%20Guadalajara&output=embed" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
