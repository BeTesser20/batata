<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            [
                'nome' => 'fulano',
                'email' => 'fulano@gmail.com',
                'username' => 'fulaninho123',
                'password' => 1234,
                'admin' => 0
            ],
            [
                'nome' => 'ciclano',
                'email' => 'ciclano@gmail.com',
                'username' => 'ciclaninho123',
                'password' => 5678,
                'admin' => 0
            ]
        ]);
    }
}
