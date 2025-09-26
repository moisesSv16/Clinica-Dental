<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Specialty extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    /* =======================
     * Relaciones Eloquent
     * ======================= */

    // Relación con doctores
    public function doctors(): HasMany
    {
        return $this->hasMany(Doctor::class);
    }
}
