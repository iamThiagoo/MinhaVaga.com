<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FluenciaIdiomaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fluencia_idioma')->insert([
            'name' => 'Básico'
        ]);

        DB::table('fluencia_idioma')->insert([
            'name' => 'Intermediário'
        ]);

        DB::table('fluencia_idioma')->insert([
            'name' => 'Avançado'
        ]);

        DB::table('fluencia_idioma')->insert([
            'name' => 'Fluente'
        ]);
    }
}
