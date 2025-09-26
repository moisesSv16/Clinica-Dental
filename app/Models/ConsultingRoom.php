<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ConsultingRoom extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_id',
        'name',
        'description',
        'status',
    ];

    /* =======================
     * Relaciones Eloquent
     * ======================= */

    // Relación con sucursal
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class);
    }

    // Relación muchos a muchos con doctores
    public function doctors(): BelongsToMany
    {
        return $this->belongsToMany(Doctor::class, 'consulting_room_doctor')
                    ->withPivot('work_schedule')
                    ->withTimestamps();
    }

    // Relación con citas
    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }
}
