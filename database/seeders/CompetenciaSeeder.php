<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompetenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('competencias')->insert([
            'name' => 'PHP'
        ]);

        DB::table('competencias')->insert([
            'name' => 'Laravel'
        ]);

        DB::table('competencias')->insert([
            'name' => 'Excel'
        ]);

        DB::table('competencias')->insert([
            'name' => 'JavaScript'
        ]);

        DB::table('competencias')->insert([
            'name' => 'HTML'
        ]);

        DB::table('competencias')->insert([
            'name' => 'CSS'
        ]);

        DB::table('competencias')->insert([
            'name' => 'Comunicação'
        ]);

        DB::table('competencias')->insert([
            'name' => 'TeleMarketing'
        ]);

        DB::table('competencias')->insert([
            'name' => 'React'
        ]);

        DB::table('competencias')->insert([
            'name' => 'Negócios'
        ]);

        DB::table('competencias')->insert([
            'name' => 'Desenvolvimento Web'
        ]);

        DB::table('competencias')->insert([
            'name' => 'Desenvolvimento Back-End'
        ]);

        DB::table('competencias')->insert([
            'name' => 'Desenvolvimento Front-End'
        ]);

        DB::table('competencias')->insert([
            'name' => 'Designer Gráfico'
        ]);

        DB::table('competencias')->insert([
            'name' => 'Robôtica'
        ]);

        DB::table('competencias')->insert([
            'name' => 'Computação em Nuvem'
        ]);

        DB::table('competencias')->insert([
            'name' => 'Analise e Desenvolvimento de Sistemas'
        ]);

        DB::table('competencias')->insert([
            'name' => 'Liderança'
        ]);

        DB::table('competencias')->insert([
            'name' => 'Administração'
        ]);

        DB::table('competencias')->insert([
            'name' => 'Mídias Sociais'
        ]);

        DB::table('competencias')->insert([
            'name' => 'Design'
        ]);

        DB::table('competencias')->insert([
            'name' => 'Edição de Vídeo'
        ]);
    }
}
