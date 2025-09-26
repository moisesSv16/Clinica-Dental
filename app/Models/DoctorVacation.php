<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DoctorVacation extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id',
        'start_date',
        'end_date',
        'days_requested',
        'days_taken',
        'days_returned',
        'reason',
        'status', // aprobado | pendiente | suspendido | finalizado
    ];

    /* =======================
     * Relaciones Eloquent
     * ======================= */

    // Relación con el doctor
    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }
}
