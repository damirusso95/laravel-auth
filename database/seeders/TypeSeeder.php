<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typesFront = new Type();
        $typesFront->nome = "Front-end";
        $typesFront->descrizione = "Front-end development";
        $typesFront->icona = "fa-frontend";
        $typesFront->save();

        $typesBack = new Type();
        $typesBack->nome = "Back-end";
        $typesBack->descrizione = "Back-end development";
        $typesBack->icona = "fa-Backend";
        $typesBack->save();

        $typesFull = new Type();
        $typesFull->nome = "Full stack";
        $typesFull->descrizione = "Full stack development";
        $typesFull->icona = "fa-fullstack";
        $typesFull->save();

        $typesDes = new Type();
        $typesDes->nome = "Design";
        $typesDes->descrizione = "Design";
        $typesDes->icona = "fa-design";
        $typesDes->save();

    }
      
  }

