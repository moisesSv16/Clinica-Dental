<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Atributos asignables en masa.
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',          // admin | doctor | paciente | recepcionista
        'status',        // activo | inactivo
        'profile_photo', // ruta en storage (p.ej. "profile-photos/abc.jpg")
    ];

    /**
     * Atributos ocultos en la serialización.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Casts de atributos.
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Atributos agregados al array/JSON de salida.
     */
    protected $appends = ['profile_photo_url'];

    /**
     * Accesor: URL pública de la foto de perfil.
     */
    public function getProfilePhotoUrlAttribute(): ?string
    {
        if (!$this->profile_photo) {
            return null;
        }
        // Ajusta el disk si usas otro distinto a "public"
        //return Storage::disk('public')->url($this->profile_photo);
        return asset('storage/' . $this->profile_photo);

    }

    /* =======================
     * Relaciones Eloquent
     * ======================= */

    public function doctor(): HasOne
    {
        return $this->hasOne(Doctor::class);
    }

    public function patient(): HasOne
    {
        return $this->hasOne(Patient::class);
    }

    public function activities(): HasMany
    {
        return $this->hasMany(ActivityLog::class);
    }

    public function supplyMovements(): HasMany
    {
        return $this->hasMany(SupplyMovement::class, 'performed_by');
    }

    public function medicalFilesUploaded(): HasMany
    {
        return $this->hasMany(MedicalFile::class, 'uploaded_by');
    }
}
