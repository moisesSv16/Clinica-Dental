<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Autorizar la petición.
     * Siempre se permite ya que el login debe ser público.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Reglas de validación para el formulario de login.
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email', 'max:255'], // debe ser un email válido
            'password' => ['required', 'string'],                  // contraseña requerida
            'remember' => ['sometimes', 'boolean'],                // recordar sesión (opcional)
        ];
    }

    /**
     * Intenta autenticar las credenciales del usuario.
     *
     * - Aplica protección contra fuerza bruta con RateLimiter.
     * - Solo permite login si el usuario está "activo".
     * - Lanza excepción si las credenciales no son válidas.
     */
    public function authenticate(): void
    {
        $this->ensureIsNotRateLimited();

        // Credenciales básicas del formulario
        $credentials = $this->only('email', 'password');

        // Extra: verificamos que el usuario esté activo
        $credentials['status'] = 'activo';

        // Intento de autenticación
        if (! Auth::attempt($credentials, $this->boolean('remember'))) {
            // Si falla, sumamos un intento fallido al RateLimiter
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'), // mensaje genérico de error
            ]);
        }

        // Si la autenticación fue correcta, limpiamos el RateLimiter
        RateLimiter::clear($this->throttleKey());

        // (Opcional) Verificar si el correo está confirmado
        if (is_null($this->user()?->email_verified_at)) {
            Auth::logout();

            throw ValidationException::withMessages([
                'email' => __('Debes verificar tu correo antes de iniciar sesión.'),
            ]);
        }
    }

    /**
     * Evita intentos ilimitados de login (protección contra fuerza bruta).
     * Permite 5 intentos fallidos antes de bloquear temporalmente.
     */
    public function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return; // Aún no se excedió el límite
        }

        // Evento de bloqueo de cuenta por demasiados intentos
        event(new Lockout($this));

        // Tiempo de espera restante
        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Genera la clave única para el control de intentos (RateLimiter).
     * Se construye con el email y la IP del usuario.
     */
    public function throttleKey(): string
    {
        return Str::transliterate(
            Str::lower($this->string('email')).'|'.$this->ip()
        );
    }
}
