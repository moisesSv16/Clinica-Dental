<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ActivityLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'action',
        'table_name',
        'record_id',
        'description',
        'ip_address',
        'user_agent',
    ];

    /* =======================
     * Relaciones Eloquent
     * ======================= */

    // Relación con el usuario que realizó la acción
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
