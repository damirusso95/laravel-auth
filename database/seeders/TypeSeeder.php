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
        $types = [
            ['nome' => 'Front-end', 'descrizione' => 'Front-end development', 'icona' => 'fa-frontend'],
            ['nome' => 'Back-end', 'descrizione' => 'Back-end development', 'icona' => 'fa-backend'],
            ['nome' => 'Full stack', 'descrizione' => 'Full stack development', 'icona' => 'fa-fullstack'],
            ['nome' => 'Design', 'descrizione' => 'Design', 'icona' => 'fa-design'],
        ];

        foreach ($types as $type) {
            Type::create($type);
        }
    }
}
