<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Usuarios a insertar
        $users = [
            [
                'name' => 'Wilbert Alex Mayta Arotaype',
                'email' => 'maytawilbert168@gmail.com',
                'password' => bcrypt('12345678'),
            ],
            [
                'name' => 'Fredy Rivaldo Mamani Masco',
                'email' => 'archix@gmail.com',
                'password' => bcrypt('87654321'),
            ],
            [
                'name' => 'Christian Luque Huaraccallo',
                'email' => 'chris@gmail.com',
                'password' => bcrypt('123456787'),
            ],
        ];

        // Itera sobre cada usuario y verifica si ya existe
        foreach ($users as $userData) {
            try {
                // Verifica si el correo electrónico ya existe
                $existingUser = User::where('email', $userData['email'])->first();

                if ($existingUser) {
                    // Actualiza el usuario existente
                    $existingUser->update($userData);
                    echo "Usuario con correo {$userData['email']} actualizado.\n";
                } else {
                    // Inserta un nuevo usuario
                    User::create($userData);
                    echo "Usuario con correo {$userData['email']} creado.\n";
                }
            } catch (\Exception $e) {
                // Maneja cualquier error que ocurra
                echo "Error al insertar/actualizar usuario con correo {$userData['email']}: " . $e->getMessage() . "\n";
            }
        }
    }
}
