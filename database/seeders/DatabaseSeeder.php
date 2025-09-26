<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear usuario de prueba
        User::factory()->create([
            'name' => 'Admin Root',
            'email' => 'admin@clinica.com',
            'password' => bcrypt('12345678'), // clave de prueba
            'role' => 'admin',
            'status' => 'activo',
        ]);

        // Llamar al seeder de especialidades
        $this->call(SpecialtiesSeeder::class);
    }
}
