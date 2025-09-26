<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'doctor_id',
        'consulting_room_id',
        'appointment_date',
        'reason',
        'status',
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

    // Relación con consultorio
    public function consultingRoom(): BelongsTo
    {
        return $this->belongsTo(ConsultingRoom::class);
    }
}
