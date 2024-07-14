<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        $CatJS = new Category();
        $CatJS->name = "JavaScript";
        $CatJS->icon = "fa-brands fa-js";
        $CatJS->save();

        $CatVue = new Category();
        $CatVue->name = "VueJS";
        $CatVue->icon = "fa-brands fa-vuejs";
        $CatVue->save();

        $CatPHP = new Category();
        $CatPHP->name = "PHP";
        $CatPHP->icon = "fa-brands fa-php";
        $CatPHP->save();

        $CatLaravel = new Category();
        $CatLaravel->name = "Laravel";
        $CatLaravel->icon = "fa-brands fa-laravel";
        $CatLaravel->save();
    }
}
