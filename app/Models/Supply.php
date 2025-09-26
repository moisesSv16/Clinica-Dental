<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supply extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'quantity',
        'unit',
        'min_stock',
        'expiration_date',
        'status',
    ];

    /* =======================
     * Relaciones Eloquent
     * ======================= */

    // Relación con movimientos de insumos
    public function movements(): HasMany
    {
        return $this->hasMany(SupplyMovement::class);
    }
}
