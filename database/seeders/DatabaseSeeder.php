<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\Setor;
use App\Models\usuario;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

     //   $setor = Setor::factory()->create([
      //      'nomeSetor' =>'SEPT'
      //  ]);
        
      //  Curso::factory()->create([
       //     'setor_id' =>1,
        //    'nomeCurso' =>'TADS',
            
       // ]);
        
        usuario::factory()->create();

    }
}