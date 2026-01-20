<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Gasto;
use App\Models\CategoriaGasto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
        ]);
        CategoriaGasto::factory()->create([
            'nome' => 'Alimentação'
        ]);

        CategoriaGasto::factory()->create([
            'nome' => 'Mercado'
        ]);

        CategoriaGasto::factory()->create([
            'nome' => 'Contas'
        ]);

        CategoriaGasto::factory()->create([
            'nome' => 'Lazer'
        ]);
    }
}
