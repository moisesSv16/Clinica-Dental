<form method="POST" action="#">
    @csrf

    {{-- Selección de idioma --}}
    <div class="mb-3">
        <label for="language" class="form-label fw-bold">
            <i class="fa-solid fa-globe me-1 text-info"></i> Idioma
        </label>
        <select id="language" name="language" class="form-select">
            <option value="es" selected>Español</option>
            <option value="en">Inglés</option>
        </select>
    </div>

    {{-- Notificaciones --}}
    <div class="form-check mb-3">
        <input type="checkbox" name="notifications" id="notifications" class="form-check-input">
        <label for="notifications" class="form-check-label">
            <i class="fa-solid fa-bell me-1 text-info"></i> Recibir notificaciones por correo
        </label>
    </div>

    {{-- Modo oscuro (ejemplo extra) --}}
    <div class="form-check mb-3">
        <input type="checkbox" name="darkmode" id="darkmode" class="form-check-input">
        <label for="darkmode" class="form-check-label">
            <i class="fa-solid fa-moon me-1 text-info"></i> Activar modo oscuro
        </label>
    </div>

    {{-- Botón --}}
    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-info text-white">
            <i class="fa-solid fa-save me-1"></i> Guardar preferencias
        </button>
    </div>
</form>
