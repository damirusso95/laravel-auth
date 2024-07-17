<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\boolfolio;
use Faker\Factory as Faker;
class BoolfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Boolfolio::create([
                'autore' => $faker->name,
                'nome' => $faker->sentence(3),
                'descrizione' => $faker->paragraph(3),
                'inizio' => $faker->date(),
                'fine' => $faker->date(),
            ]);
        }
    }
}
