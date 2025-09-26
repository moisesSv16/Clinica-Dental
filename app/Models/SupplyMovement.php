<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SupplyMovement extends Model
{
    use HasFactory;

    protected $fillable = [
        'supply_id',
        'movement_type',   // entrada | salida | ajuste
        'quantity',
        'reason',
        'performed_by',    // usuario que hizo el movimiento
    ];

    /* =======================
     * Relaciones Eloquent
     * ======================= */

    // Relación con el insumo
    public function supply(): BelongsTo
    {
        return $this->belongsTo(Supply::class);
    }

    // Relación con el usuario que hizo el movimiento
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'performed_by');
    }
}
