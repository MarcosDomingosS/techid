<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Evento extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_evento')->insert([
            ['nm_evento' => 'Supervisor', 'dt_evento' => '2025-03-16 16:00:00']
        ]);
    }
}
