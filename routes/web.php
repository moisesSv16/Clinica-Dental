<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::view('/admin/dashboard', 'dashboard.admin')->middleware(['auth'])->name('admin.dashboard');
Route::view('/doctor/dashboard', 'dashboard.doctor')->middleware(['auth'])->name('doctor.dashboard');
Route::view('/recepcionista/dashboard', 'dashboard.recepcionista')->middleware(['auth'])->name('recepcionista.dashboard');
Route::view('/paciente/dashboard', 'dashboard.paciente')->middleware(['auth'])->name('paciente.dashboard');


require __DIR__.'/auth.php';
