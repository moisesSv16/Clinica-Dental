<form method="POST" action="{{ route('password.update') }}">
    @csrf
    @method('PUT')

    {{-- Contraseña actual --}}
    <div class="mb-3">
        <label for="current_password" class="form-label fw-bold">
            <i class="fa-solid fa-lock me-1 text-secondary"></i> Contraseña actual
        </label>
        <input id="current_password" type="password" name="current_password"
               class="form-control @error('current_password') is-invalid @enderror"
               required autocomplete="current-password">

        @error('current_password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Nueva contraseña --}}
    <div class="mb-3">
        <label for="password" class="form-label fw-bold">
            <i class="fa-solid fa-key me-1 text-secondary"></i> Nueva contraseña
        </label>
        <input id="password" type="password" name="password"
               class="form-control @error('password') is-invalid @enderror"
               required autocomplete="new-password">

        @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Confirmar nueva contraseña --}}
    <div class="mb-3">
        <label for="password_confirmation" class="form-label fw-bold">
            <i class="fa-solid fa-check-double me-1 text-secondary"></i> Confirmar nueva contraseña
        </label>
        <input id="password_confirmation" type="password" name="password_confirmation"
               class="form-control" required autocomplete="new-password">
    </div>

    {{-- Botón --}}
    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-secondary">
            <i class="fa-solid fa-rotate me-1"></i> Actualizar contraseña
        </button>
    </div>
</form>
