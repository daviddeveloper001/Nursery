<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Principio de Responsabilidad Única: Este seeder solo se encarga de crear roles.
        // Esto lo hace reutilizable y fácil de entender.

        // Usamos firstOrCreate para evitar duplicados si el seeder se ejecuta múltiples veces.
        Role::firstOrCreate(['name' => 'Admin']);
        Role::firstOrCreate(['name' => 'Profesor']);
        Role::firstOrCreate(['name' => 'Estudiante']);
    }
}
