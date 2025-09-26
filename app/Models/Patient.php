<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name_p',
        'last_name_m',
        'birth_date',
        'phone',
        'address',
        'allergies',
        'blood_type',
        'emergency_contact',
    ];

    /* =======================
     * Relaciones Eloquent
     * ======================= */

    // Relación con el usuario (si el paciente tiene acceso al sistema)
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
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

    // Relación con facturas
    public function invoices(): HasMany
    {
        return $this->hasMany(Invoice::class);
    }

    // Relación con archivos médicos (radiografías, estudios, etc.)
    public function medicalFiles(): HasMany
    {
        return $this->hasMany(MedicalFile::class);
    }
}
