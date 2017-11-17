<?php

use Illuminate\Database\Seeder;

class IgrejasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('igrejas')
        	->insert([
                          'nome' => 'Igreja de Teste',
        		'cnpj' => '1234567891011', 
        		'razao_social' => 'Teste',
        		'endereco' => 'Teste',
        		'bairro' => 'Teste',
        		'cidade' => 'Teste',
        		'uf' => 'Teste',
        		'cep' => 'Teste',
        		'tel' => 'Teste',
        		'dirigente' => 'Teste',
        		'tel_dirigente' => 'Teste',
        		'sede' => 'Teste',
        		'ativo' => true,
        	]);
    }
}
