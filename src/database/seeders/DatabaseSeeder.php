<?php

namespace Gsantoscomp\SharedVetDb\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Gsantoscomp\SharedVetDb\Models\Usuario;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         Usuario::factory()->create([
             'nome' => 'Test User',
             'email' => 'test@example.com'
         ]);
    }
}
