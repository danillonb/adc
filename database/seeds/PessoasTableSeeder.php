<?php

use Illuminate\Database\Seeder;

class PessoasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pessoas')
        	->insert([
        		'nome' => 'Teste', 
        		'pai' => 'Teste',
        		'mae' => 'Teste',
        		'endereco' => 'Teste',
        		'bairro' => 'Teste',
        		'cidade' => 'Teste',
        		'cep' => 'Teste',
        		'uf' => 'Teste',
        		'tel1' => 'Teste',
        		'tel2' => 'Teste',
        		'cel' => 'Teste',
        		'email' => 'Teste',
        		'dta_nasc' => '1990-10-03',
        		'cpf' => '11111111111',
        		'rg' => '111111111',
        		'orgao_exp' => 'Teste',
        		'igreja' => 'Teste',
        		'idade' => '150',
        		'dta_desligamento' => null,
        		'motivo_desligamento' => 'Teste',
        		'dta_batismo_es' => null,
        		'dta_batismo_aguas' => null,
        		'procedencia' => 'Teste',
        		'funcao_eclesiastica' => 'Teste',
        		'funcao_ministerial' => 'Teste',
        		'tipo_sanguineo' => 'Teste',
        		'fator_rh' => 'Teste',
        		'naturalidade' => 'Teste',
        		'nacionalidade' => 'Teste',
        		'estado_civil' => 'Teste',
        		'cor' => 'Teste',
        		'profissao' => 'Teste',
        		'departamento' => 'Teste',
        		'destino' => 'Teste',
        		'sexo' => 'Teste',
        		'obs' => 'Teste',
        		'ativo' => true,
        	]);
    }
}
