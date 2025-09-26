<form method="POST" action="{{ route('profile.update') }}">
    @csrf
    @method('PATCH')

    {{-- Nombre --}}
    <div class="mb-3">
        <label for="name" class="form-label fw-bold">
            <i class="fa-solid fa-user me-1 text-primary"></i> Nombre
        </label>
        <input id="name" type="text" name="name"
               class="form-control @error('name') is-invalid @enderror"
               value="{{ old('name', $user->name) }}" required autofocus>

        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Correo electrónico --}}
    <div class="mb-3">
        <label for="email" class="form-label fw-bold">
            <i class="fa-solid fa-envelope me-1 text-primary"></i> Correo Electrónico
        </label>
        <input id="email" type="email" name="email"
               class="form-control @error('email') is-invalid @enderror"
               value="{{ old('email', $user->email) }}" required>

        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Botón --}}
    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-primary">
            <i class="fa-solid fa-save me-1"></i> Guardar cambios
        </button>
    </div>
</form>
