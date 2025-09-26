<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InvoicePayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_id',
        'amount',
        'payment_method',
        'payment_date',
        'notes',
    ];

    /* =======================
     * Relaciones Eloquent
     * ======================= */

    // Relación con factura
    public function invoice(): BelongsTo
    {
        return $this->belongsTo(Invoice::class);
    }
}
