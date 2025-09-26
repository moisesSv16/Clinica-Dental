<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    /**
     * Respuesta después de un login exitoso.
     * Redirige al dashboard correspondiente según el rol del usuario.
     */
    public function toResponse($request)
    {
        $user = $request->user();

        // Definir la ruta de redirección según el rol
        $redirectTo = match ($user->role) {
            'admin'         => route('admin.dashboard'),
            'doctor'        => route('doctor.dashboard'),
            'recepcionista' => route('recepcionista.dashboard'),
            'paciente'      => route('paciente.dashboard'),
            default         => route('dashboard'),
        };

        return redirect()->intended($redirectTo);
    }
}
