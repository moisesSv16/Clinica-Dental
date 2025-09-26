<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MedicalFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'medical_record_id',
        'uploaded_by',
        'file_path',
        'file_type',
        'description',
    ];

    /* =======================
     * Relaciones Eloquent
     * ======================= */

    // Relación con paciente
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    // Relación con historial médico
    public function medicalRecord(): BelongsTo
    {
        return $this->belongsTo(MedicalRecord::class);
    }

    // Relación con usuario que subió el archivo
    public function uploader(): BelongsTo
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }
}
