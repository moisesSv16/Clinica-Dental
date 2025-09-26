<footer class="pt-5 pb-4 bg-light text-dark border-top">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-4">
                <h5 class="fw-bold mb-3">Clínica Dental</h5>
                <p class="text-muted small">
                    Cuidando tu sonrisa con la más alta calidad y tecnología.
                </p>
                <p class="small mt-4 mb-0 text-dark">
                    &copy; <span id="year"></span> Clínica Dental. <br>
                    Todos los derechos reservados.
                </p>
            </div>

            <div class="col-6 col-md-3 mb-4">
                <h6 class="fw-bold text-uppercase mb-3">Enlaces Rápidos</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-decoration-none text-dark-50 hover-link">Inicio</a></li>
                    <li><a href="#" class="text-decoration-none text-dark-50 hover-link">Servicios</a></li>
                    <li><a href="#" class="text-decoration-none text-dark-50 hover-link">Equipo Médico</a></li>
                    <li><a href="#" class="text-decoration-none text-dark-50 hover-link">Preguntas Frecuentes</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-3 mb-4">
                <h6 class="fw-bold text-uppercase mb-3">Información Legal</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-decoration-none text-dark-50 hover-link">Aviso de Privacidad</a></li>
                    <li><a href="#" class="text-decoration-none text-dark-50 hover-link">Términos y Condiciones</a></li>
                    <li><a href="#" class="text-decoration-none text-dark-50 hover-link">Horarios</a></li>
                </ul>
            </div>

            <div class="col-md-3 mb-4">
                <h6 class="fw-bold text-uppercase mb-3">Contáctanos</h6>
                <p class="small text-muted mb-1"><i class="fas fa-map-marker-alt me-2"></i> Dirección de la Clínica #123</p>
                <p class="small text-muted mb-1"><i class="fas fa-phone me-2"></i> (55) 1234-5678</p>
                <p class="small text-muted mb-3"><i class="fas fa-envelope me-2"></i> info@clinicadental.com</p>
                
                <div class="d-flex gap-3 pt-2 border-top">
                    <a href="#" target="_blank" class="text-dark-50 hover-icon"><i class="fa-brands fa-instagram fa-lg"></i></a>
                    <a href="#" target="_blank" class="text-dark-50 hover-icon"><i class="fa-brands fa-facebook-f fa-lg"></i></a>
                    <a href="#" target="_blank" class="text-dark-50 hover-icon"><i class="fa-brands fa-whatsapp fa-lg"></i></a>
                    <a href="#" target="_blank" class="text-dark-50 hover-icon"><i class="fa-brands fa-linkedin-in fa-lg"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('year').textContent = new Date().getFullYear();
    });
</script>