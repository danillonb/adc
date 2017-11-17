<?php

use Illuminate\Database\Seeder;

class MinisterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('ministerials')->insert(['funcao' => '1º Secretário(a)', 'descricao' => 'Fazer o Relatório Mensal de Secretaria']);
		DB::table('ministerials')->insert(['funcao' => '2º Secretário(a)', 'descricao' => '.']);
		DB::table('ministerials')->insert(['funcao' => '1º Tesoureiro(a)', 'descricao' => '.']);
		DB::table('ministerials')->insert(['funcao' => '2º Tesoureiro(a)', 'descricao' => '.']);
		DB::table('ministerials')->insert(['funcao' => 'Procurador(a)', 'descricao' => '.']);
		DB::table('ministerials')->insert(['funcao' => 'Dirigente de Agostinho Porto', 'descricao' => '.']);
		DB::table('ministerials')->insert(['funcao' => 'Superintendente da EBD', 'descricao' => '.']);
		DB::table('ministerials')->insert(['funcao' => 'Vice-dirigente da Congregação', 'descricao' => '.']);
		DB::table('ministerials')->insert(['funcao' => 'Pastor Dirigente', 'descricao' => '.']);
		DB::table('ministerials')->insert(['funcao' => '3º Secretário(a)', 'descricao' => '.']);
		DB::table('ministerials')->insert(['funcao' => 'Líder dos Varões', 'descricao' => '.']);
		DB::table('ministerials')->insert(['funcao' => 'Dirigente de Oração', 'descricao' => '.']);
		DB::table('ministerials')->insert(['funcao' => 'Líder da União Feminina', 'descricao' => '.']);
		DB::table('ministerials')->insert(['funcao' => 'Dirigente de Paraíba do Sul', 'descricao' => '.']);
		DB::table('ministerials')->insert(['funcao' => 'Líder da Mocidade', 'descricao' => '.']);
		DB::table('ministerials')->insert(['funcao' => 'Dirigente Grupo Mocidade', 'descricao' => '.']);
    }
}
