<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Asegúrate de importar el modelo de User
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear dos usuarios con el tipo 'admin_room_911'
        User::create([
            'name' => 'Admin User 1',
            'email' => 'admin@admin.com',
            'password' => Hash::make('wesleyana123'),
        ]);
    }
}
