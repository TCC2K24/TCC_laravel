<?php

namespace Database\Seeders;

use App\Models\servidor;
use App\Models\usuario;
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
    }
}
