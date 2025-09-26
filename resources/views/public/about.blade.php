 
@extends('layouts.public')

@section('title', 'Sobre Nosotros - Clínica Dental')

@section('content')
<section class="py-5">
    <div class="container">
        <h2 class="fw-bold text-center mb-4">Sobre Nosotros</h2>
        <p class="text-center text-muted mb-5">
            Somos una clínica dental moderna comprometida con tu salud bucal. 
            Nuestro equipo de especialistas ofrece tratamientos personalizados con tecnología de vanguardia.
        </p>

        <div class="row g-4">
            <div class="col-md-6">
                <img src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?q=80&w=1200" 
                     class="img-fluid rounded shadow" alt="Clínica Dental">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <p class="lead">
                    Nuestra misión es brindarte una experiencia cómoda, segura y profesional. 
                    Nos enfocamos en la prevención, diagnóstico y tratamiento de todas las áreas odontológicas.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
