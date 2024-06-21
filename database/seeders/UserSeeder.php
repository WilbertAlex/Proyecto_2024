<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Wilbert Alex Mayta Arotaype',
            'email' => 'maytawilbert168@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'Fredy Rivaldo Mamani Masco',
            'email' => 'archix@gmail.com',
            'password' => bcrypt('87654321')
        ]);

        User::create([
            'name' => 'Christian Luque Huaraccallo',
            'email' => 'chris@gmail.com',
            'password' => bcrypt('123456787')
        ]);
    }
}
