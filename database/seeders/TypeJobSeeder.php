<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TypeJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_job')->insert([
            'name' => 'Integral'
        ]);

        DB::table('type_job')->insert([
            'name' => 'Efetivo/CLT'
        ]);

        DB::table('type_job')->insert([
            'name' => 'Meio Período'
        ]);

        DB::table('type_job')->insert([
            'name' => 'Aprendiz'
        ]);

        DB::table('type_job')->insert([
            'name' => 'Autônomo'
        ]);

        DB::table('type_job')->insert([
            'name' => 'Estágio'
        ]);

        DB::table('type_job')->insert([
            'name' => 'Temporário'
        ]);
    }
}
