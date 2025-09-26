<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rutas Públicas (Landing)
|--------------------------------------------------------------------------
*/
Route::view('/', 'public.home')->name('home');                // Página principal
Route::view('/about', 'public.about')->name('about');         // Sobre la clínica
Route::view('/team', 'public.team')->name('team');            // Conoce a los doctores
Route::view('/contact', 'public.contact')->name('contact');   // Formulario de contacto + mapa
Route::view('/faq', 'public.faq')->name('faq');               // Preguntas frecuentes
Route::view('/servicios', 'public.services.index')->name('services.index'); // Vista general de servicios
Route::view('/servicios/ortodoncia', 'public.services.ortodoncia')->name('services.ortodoncia');
Route::view('/servicios/endodoncia', 'public.services.endodoncia')->name('services.endodoncia');
Route::view('/servicios/limpieza', 'public.services.limpieza')->name('services.limpieza');
Route::view('/servicios/implantes', 'public.services.implantes')->name('services.implantes');
Route::view('/servicios/estetica', 'public.services.estetica')->name('services.estetica');

/*
|--------------------------------------------------------------------------
| Rutas Dashboard General
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Rutas Perfil de Usuario (Autenticado)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Rutas Dashboards por Rol
|--------------------------------------------------------------------------
*/
Route::view('/admin/dashboard', 'dashboard.admin')
    ->middleware(['auth'])->name('admin.dashboard');

Route::view('/doctor/dashboard', 'dashboard.doctor')
    ->middleware(['auth'])->name('doctor.dashboard');

Route::view('/recepcionista/dashboard', 'dashboard.recepcionista')
    ->middleware(['auth'])->name('recepcionista.dashboard');

Route::view('/paciente/dashboard', 'dashboard.paciente')
    ->middleware(['auth'])->name('paciente.dashboard');

/*
|--------------------------------------------------------------------------
| Autenticación (Laravel Breeze/Jetstream)
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';
