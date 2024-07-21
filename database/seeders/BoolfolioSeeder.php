<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Boolfolio;
use Faker\Generator as Faker;
class BoolfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        

        for ($i = 0; $i < 30; $i++) {

            $newBoolfolio = new Boolfolio();
            $newBoolfolio->autore = $faker->sentence(2);
            $newBoolfolio->nome = $faker->sentence(2);
            $newBoolfolio->cover_image = $faker->imageUrl(400,300, 'boolfolios',true, gray:true, format:'jpg');

            $newBoolfolio->descrizione = $faker->paragraph(3);
            $newBoolfolio->inizio = $faker->date();
            $newBoolfolio->fine = $faker->date();
            $newBoolfolio->category_id = $faker->numberBetween(1, 4);
            $newBoolfolio->save();

        }
    }
}
