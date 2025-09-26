<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialtiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('specialties')->insert([
            [
                'name' => 'Ortodoncia',
                'description' => 'Corrección dental y de la mordida',
                'status' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Endodoncia',
                'description' => 'Tratamiento de nervios y raíces dentales',
                'status' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Periodoncia',
                'description' => 'Tratamiento de encías y tejidos de soporte',
                'status' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cirugía Oral',
                'description' => 'Extracciones y procedimientos quirúrgicos',
                'status' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Odontopediatría',
                'description' => 'Atención dental para niños',
                'status' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Implantología',
                'description' => 'Colocación de implantes dentales',
                'status' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Estética Dental',
                'description' => 'Blanqueamientos, carillas y estética dental',
                'status' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Prostodoncia',
                'description' => 'Prótesis dentales y rehabilitación oral',
                'status' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Odontología General',
                'description' => 'Revisiones, limpiezas y atención básica',
                'status' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Radiología Dental',
                'description' => 'Estudios de rayos X y diagnóstico por imagen',
                'status' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Patología Oral',
                'description' => 'Diagnóstico de enfermedades bucales',
                'status' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Medicina Oral',
                'description' => 'Tratamiento médico de afecciones bucales',
                'status' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cirugía Maxilofacial',
                'description' => 'Cirugías complejas de mandíbula y rostro',
                'status' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Odontología Forense',
                'description' => 'Identificación y análisis forense dental',
                'status' => 'inactivo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gerodontología',
                'description' => 'Atención dental para adultos mayores',
                'status' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Traumatología Dental',
                'description' => 'Tratamiento de fracturas y traumas dentales',
                'status' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Odontología Preventiva',
                'description' => 'Prevención de enfermedades bucales',
                'status' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rehabilitación Oral',
                'description' => 'Restauración funcional y estética de la boca',
                'status' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Anestesiología Dental',
                'description' => 'Control del dolor en procedimientos dentales',
                'status' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Odontología Digital',
                'description' => 'Uso de tecnologías digitales en tratamientos',
                'status' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
