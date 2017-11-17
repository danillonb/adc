<?php

use Illuminate\Database\Seeder;

class EcleseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eclese')->insert(['funcao' => 'Pastor']);
        DB::table('eclese')->insert(['funcao' => 'Evangelista']);
        DB::table('eclese')->insert(['funcao' => 'Presbítero']);
        DB::table('eclese')->insert(['funcao' => 'Diácono']);
        DB::table('eclese')->insert(['funcao' => 'Missionário(a)']);
        DB::table('eclese')->insert(['funcao' => 'Membro']);
        DB::table('eclese')->insert(['funcao' => 'Trabalhador']);
        DB::table('eclese')->insert(['funcao' => 'Aux. de Trabalho']);
        DB::table('eclese')->insert(['funcao' => 'Outro']);
    }
}
