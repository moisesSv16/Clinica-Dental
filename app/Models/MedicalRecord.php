<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MedicalRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'doctor_id',
        'diagnosis',
        'treatment',
        'prescription',
        'notes',
    ];

    /* =======================
     * Relaciones Eloquent
     * ======================= */

    // Relación con paciente
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    // Relación con doctor
    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }

    // Relación con archivos médicos (radiografías, estudios, etc.)
    public function files(): HasMany
    {
        return $this->hasMany(MedicalFile::class);
    }
}
