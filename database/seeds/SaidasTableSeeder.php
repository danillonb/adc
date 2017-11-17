<?php

use Illuminate\Database\Seeder;

class SaidasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('saidas')->insert(['saida' => 'Exclusão']);
        DB::table('saidas')->insert(['saida' => 'Saída com carta de mudança']);
        DB::table('saidas')->insert(['saida' => 'Saída para outra denominação']);
        DB::table('saidas')->insert(['saida' => 'Transferência para outra filial']);
        DB::table('saidas')->insert(['saida' => 'Falecimento']);
        DB::table('saidas')->insert(['saida' => 'Outro']);
    }
}
