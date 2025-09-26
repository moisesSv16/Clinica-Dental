<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'specialty_id',
        'first_name',
        'last_name_p',
        'last_name_m',
        'employee_number',
        'phone',
        'license_number',
        'experience_years',
    ];

    /* =======================
     * Relaciones Eloquent
     * ======================= */

    // Relación con el usuario (login)
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relación con la especialidad
    public function specialty(): BelongsTo
    {
        return $this->belongsTo(Specialty::class);
    }

    // Relación con citas
    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }

    // Relación con historiales médicos
    public function medicalRecords(): HasMany
    {
        return $this->hasMany(MedicalRecord::class);
    }

    // Relación muchos a muchos con consultorios
    public function consultingRooms(): BelongsToMany
    {
        return $this->belongsToMany(ConsultingRoom::class, 'consulting_room_doctor')
                    ->withPivot('work_schedule')
                    ->withTimestamps();
    }

    // Relación con saldo de vacaciones
    public function vacationBalances(): HasMany
    {
        return $this->hasMany(DoctorVacationBalance::class);
    }

    // Relación con solicitudes de vacaciones
    public function vacations(): HasMany
    {
        return $this->hasMany(DoctorVacation::class);
    }
}
