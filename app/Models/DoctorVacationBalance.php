<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DoctorVacationBalance extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id',
        'year',
        'days_total',
        'days_taken',
        'days_available',
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
