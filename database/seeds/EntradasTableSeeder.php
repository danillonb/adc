d<?php

use Illuminate\Database\Seeder;

class EntradasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entradas')->insert(['entrada' => 'Batismo']);
        DB::table('entradas')->insert(['entrada' => 'Reconciliação']);
        DB::table('entradas')->insert(['entrada' => 'Recebimento por Carta de Mudança']);
        DB::table('entradas')->insert(['entrada' => 'Recebimento por Aclamação']);
        DB::table('entradas')->insert(['entrada' => 'Transferência de Outra Filial']);
        DB::table('entradas')->insert(['entrada' => 'Outro']);
    }
}
