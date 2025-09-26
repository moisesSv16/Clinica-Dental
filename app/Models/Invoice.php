<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'treatment_id',
        'amount',
        'status',
        'payment_method',
    ];

    /* =======================
     * Relaciones Eloquent
     * ======================= */

    // Relación con paciente
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    // Relación con tratamiento
    public function treatment(): BelongsTo
    {
        return $this->belongsTo(Treatment::class);
    }

    // Relación con pagos parciales
    public function payments(): HasMany
    {
        return $this->hasMany(InvoicePayment::class);
    }
}
