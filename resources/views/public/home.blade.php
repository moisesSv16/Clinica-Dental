@extends('layouts.public')

@section('title', 'Inicio - Clínica Dental')

{{-- Hero exclusivo de Home --}}
@section('hero')
<header class="hero text-white d-flex align-items-center" id="inicio" style="
    min-height: 80vh;
    background-image: linear-gradient(to bottom right, rgba(13,110,253,.65), rgba(11,34,57,.75)),
                      url('https://images.unsplash.com/photo-1629909613654-28e377c37b09?q=80&w=1600&auto=format&fit=crop');
    background-size: cover; background-position: center; background-attachment: fixed;">
    <div class="container text-center">
      <h1 class="display-5 fw-bold">Tu sonrisa, nuestra prioridad.</h1>
      <p class="lead mt-3 mb-4">
        Clínica dental moderna con especialistas en limpieza, ortodoncia e implantes.
      </p>
      <div class="d-flex gap-3 justify-content-center">
        <a href="{{ url('/contacto') }}" class="btn btn-primary btn-lg">
          <i class="fa-solid fa-calendar-check me-2"></i> Agenda tu cita
        </a>
        <a href="{{ url('/servicios') }}" class="btn btn-outline-light btn-lg">
          <i class="fa-solid fa-tooth me-2"></i> Ver servicios
        </a>
      </div>
    </div>
</header>
@endsection

{{-- Contenido principal --}}
@section('content')

    <!-- Servicios -->
    <section id="servicios" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Nuestros Servicios</h2>
            <p class="text-center text-muted mb-5">Tratamientos integrales para cuidar tu salud bucal.</p>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm hover-shadow">
                        <div class="card-body text-center">
                            <i class="fa-solid fa-brush fa-2x text-primary mb-3"></i>
                            <h5 class="card-title">Limpieza Dental</h5>
                            <p class="text-muted">Profilaxis profesional para prevenir caries y enfermedades periodontales.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm hover-shadow">
                        <div class="card-body text-center">
                            <i class="fa-solid fa-teeth-open fa-2x text-primary mb-3"></i>
                            <h5 class="card-title">Ortodoncia</h5>
                            <p class="text-muted">Brackets y alineadores estéticos para una sonrisa alineada.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm hover-shadow">
                        <div class="card-body text-center">
                            <i class="fa-solid fa-screwdriver-wrench fa-2x text-primary mb-3"></i>
                            <h5 class="card-title">Implantes</h5>
                            <p class="text-muted">Reemplazo de piezas dentales con implantes de alta calidad y biocompatibles.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Equipo -->
    <section id="equipo" class="py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Conoce a Nuestro Equipo</h2>
            <p class="text-center text-muted mb-5">Profesionales apasionados por tu bienestar dental.</p>

            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card shadow-sm h-100 text-center">
                        <img src="https://images.unsplash.com/photo-1550831107-1553da8c8464?q=80&w=800" class="card-img-top" alt="Dra. Ana Pérez">
                        <div class="card-body">
                            <h5 class="card-title">Dra. Ana Pérez</h5>
                            <small class="text-muted">Odontóloga General</small>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="card shadow-sm h-100 text-center">
                        <img src="https://images.unsplash.com/photo-1544006659-f0b21884ce1d?q=80&w=800" class="card-img-top" alt="Dr. Luis Romero">
                        <div class="card-body">
                            <h5 class="card-title">Dr. Luis Romero</h5>
                            <small class="text-muted">Ortodoncista</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm h-100 text-center">
                        <img src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?q=80&w=800" class="card-img-top" alt="Dra. Sofía Núñez">
                        <div class="card-body">
                            <h5 class="card-title">Dra. Sofía Núñez</h5>
                            <small class="text-muted">Periodoncista</small>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="card shadow-sm h-100 text-center">
                        <img src="https://images.unsplash.com/photo-1525134479668-1bee5c7c6845?q=80&w=800" class="card-img-top" alt="Dr. Marco Díaz">
                        <div class="card-body">
                            <h5 class="card-title">Dr. Marco Díaz</h5>
                            <small class="text-muted">Implantólogo</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonios -->
    <section id="testimonios" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Lo que dicen nuestros pacientes</h2>
            <div id="carouselTestimonios" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active text-center">
                        <blockquote class="blockquote">
                            <p>“Me explicaron todo con claridad y el resultado fue increíble. ¡Cero dolor y mucha paciencia!”</p>
                        </blockquote>
                        <footer class="blockquote-footer">Laura G.</footer>
                    </div>

                    <div class="carousel-item text-center">
                        <blockquote class="blockquote">
                            <p>“La ortodoncia con alineadores fue comodísima. El equipo siempre atento.”</p>
                        </blockquote>
                        <footer class="blockquote-footer">Carlos R.</footer>
                    </div>

                    <div class="carousel-item text-center">
                        <blockquote class="blockquote">
                            <p>“Me devolvieron la confianza al sonreír. Excelente trato y tecnología.”</p>
                        </blockquote>
                        <footer class="blockquote-footer">Andrea M.</footer>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimonios" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimonios" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>

    <!-- Contacto -->
    <section id="contacto" class="py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Contacto</h2>
            <p class="text-center text-muted mb-5">¿Listo para tu nueva sonrisa? Escríbenos y agenda tu cita.</p>

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
