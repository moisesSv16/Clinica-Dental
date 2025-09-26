<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'status',
    ];

    /* =======================
     * Relaciones Eloquent
     * ======================= */

    // Relación con consultorios
    public function consultingRooms(): HasMany
    {
        return $this->hasMany(ConsultingRoom::class);
    }
}
