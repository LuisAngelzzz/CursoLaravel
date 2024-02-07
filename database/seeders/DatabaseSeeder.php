<?php

namespace Database\Seeders;
use App\Models\Curso;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {

        User::factory(10)->create();
        curso::factory(50)->create();
            

          $this->call(CursoSeeder::class);
    }
}