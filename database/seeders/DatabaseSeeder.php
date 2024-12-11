<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\Setor;
use App\Models\servidor;
use App\Models\usuario;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $path = 'TCC-Insert.sql';
        DB::unprepared(file_get_contents($path));
        usuario::factory()->create();
        servidor::factory()->create();
        DB::unprepared('INSERT INTO usuario_disciplina  (id, usuario_id,disciplina_id) VALUES (1, 1, 1),(2, 1, 2),(3, 1, 3)');
    }
}