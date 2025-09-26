<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 fw-bold text-primary mb-0">
            <i class="fa-solid fa-user-circle me-2"></i> {{ __('Perfil de Usuario') }}
        </h2>
    </x-slot>

    <div class="container py-5">

        <div class="row g-4">
            {{-- Información personal --}}
            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white fw-bold">
                        <i class="fa-solid fa-id-card me-2"></i> Información Personal
                    </div>
                    <div class="card-body">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </div>

            {{-- Actualizar contraseña --}}
            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-secondary text-white fw-bold">
                        <i class="fa-solid fa-key me-2"></i> Actualizar Contraseña
                    </div>
                    <div class="card-body">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-3">
            {{-- Preferencias de usuario (ejemplo opcional) --}}
{{-- Preferencias de usuario --}}
<div class="col-lg-6">
    <div class="card shadow-sm">
        <div class="card-header bg-info text-white fw-bold">
            <i class="fa-solid fa-gear me-2"></i> Preferencias
        </div>
        <div class="card-body">
            @include('profile.partials.preferences-form')
        </div>
    </div>
</div>

            {{-- Eliminar cuenta --}}
            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-danger text-white fw-bold">
                        <i class="fa-solid fa-trash me-2"></i> Eliminar Cuenta
                    </div>
                    <div class="card-body">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
