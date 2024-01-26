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
<<<<<<< HEAD
        User::factory(10)->create();
        curso::factory(50)->create();
            
=======
          $this->call(CursoSeeder::class);
>>>>>>> ef304eb (12. Seeders en Laravel ¿Qué son y para que sirven?)
    }
}