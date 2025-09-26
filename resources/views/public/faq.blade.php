 
@extends('layouts.public')

@section('title', 'Preguntas Frecuentes - Clínica Dental')

@section('content')
<section class="py-5">
    <div class="container">
        <h2 class="fw-bold text-center mb-4">Preguntas Frecuentes</h2>
        <p class="text-center text-muted mb-5">Encuentra respuestas rápidas a las dudas más comunes.</p>

        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        ¿Cada cuánto debo hacerme una limpieza dental?
                    </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Lo ideal es realizar una limpieza dental cada 6 meses para mantener una buena salud bucal.
                    </div>
                </div>
            </div>
            
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        ¿Los tratamientos son dolorosos?
                    </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        No, trabajamos con técnicas modernas y anestesia local para tu comodidad.
                    </div>
                </div>
            </div>
            
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        ¿Aceptan seguros médicos?
                    </button>
                </h2>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Sí, aceptamos diversos seguros médicos. Contáctanos para más detalles.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
