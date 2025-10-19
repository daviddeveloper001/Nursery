<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creamos un usuario administrador.
        // Usamos firstOrCreate para que, si ya existe un usuario con ese email, no intente crearlo de nuevo.
        $adminUser = User::firstOrCreate(
            ['email' => 'admin@nursery.com'],
            [
                'name' => 'Administrador',
                'password' => bcrypt('password'), // En un proyecto real, usar credenciales seguras y variables de entorno.
            ]
        );

        // Obtenemos el rol 'Admin' que fue creado por el RoleSeeder.
        $adminRole = Role::findByName('Admin');

        // Asignamos el rol al usuario.
        $adminUser->assignRole($adminRole);
    }
}
