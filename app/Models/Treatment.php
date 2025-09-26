<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Treatment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'duration_minutes',
    ];

    /* =======================
     * Relaciones Eloquent
     * ======================= */

    // Relación con facturas
    public function invoices(): HasMany
    {
        return $this->hasMany(Invoice::class);
    }
}
