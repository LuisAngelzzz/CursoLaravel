<?php

namespace Database\Seeders;

use App\Models\Curso;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    public function run(): void
    {
        $curso = new Curso();
        
        $curso->name = "laravel";
        $curso->descripcion = "El framework de Laravel PHP";
        $curso->categoria = "Desarrollo web";

        $curso->save();

        $curso2 = new Curso();
        
        $curso2->name = "laravel";
        $curso2->descripcion = "El framework de Laravel PHP";
        $curso2->categoria = "Desarrollo web";

        $curso2->save();

        $curso3 = new Curso();
        
        $curso3->name = "laravel";
        $curso3->descripcion = "El framework de Laravel PHP";
        $curso3->categoria = "Desarrollo web";

        $curso3->save();
    }
}
