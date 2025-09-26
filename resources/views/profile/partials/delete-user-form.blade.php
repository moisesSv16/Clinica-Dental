<form method="POST" action="{{ route('profile.destroy') }}">
    @csrf
    @method('DELETE')

    <div class="alert alert-warning d-flex align-items-center" role="alert">
        <i class="fa-solid fa-triangle-exclamation fa-lg me-2 text-danger"></i>
        <div>
            <strong>Atención:</strong> Una vez que elimines tu cuenta, todos tus datos se perderán
            <span class="fw-bold">de forma permanente</span>. Esta acción no se puede deshacer.
        </div>
    </div>

    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-danger"
            onclick="return confirm('¿Estás seguro de eliminar tu cuenta? Esta acción es irreversible.')">
            <i class="fa-solid fa-trash me-1"></i> Eliminar cuenta
        </button>
    </div>
</form>
