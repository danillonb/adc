<?php

use Illuminate\Database\Seeder;

class UfsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			DB::table('ufs')->insert(['estado' => 'Acre', 'uf' => 'AC']);
			DB::table('ufs')->insert(['estado' => 'Alagoas', 'uf' => 'AL']);
			DB::table('ufs')->insert(['estado' => 'Amazonas', 'uf' => 'AM']);
			DB::table('ufs')->insert(['estado' => 'Amapa', 'uf' => 'AP']);
			DB::table('ufs')->insert(['estado' => 'Bahia', 'uf' => 'BA']);
			DB::table('ufs')->insert(['estado' => 'Ceará', 'uf' => 'CE']);
			DB::table('ufs')->insert(['estado' => 'Distrito Federal', 'uf' => 'DF']);
			DB::table('ufs')->insert(['estado' => 'Espírito Santo', 'uf' => 'ES']);
			DB::table('ufs')->insert(['estado' => 'Goias', 'uf' => 'GO']);
			DB::table('ufs')->insert(['estado' => 'Maranhão', 'uf' => 'MA']);
			DB::table('ufs')->insert(['estado' => 'Minas Gerais', 'uf' => 'MG']);
			DB::table('ufs')->insert(['estado' => 'Mato Grosso do Sul', 'uf' => 'MS']);
			DB::table('ufs')->insert(['estado' => 'Mato Grosso', 'uf' => 'MT']);
			DB::table('ufs')->insert(['estado' => 'Pará', 'uf' => 'PA']);
			DB::table('ufs')->insert(['estado' => 'Paraíba', 'uf' => 'PB']);
			DB::table('ufs')->insert(['estado' => 'Pernambuco', 'uf' => 'PE']);
			DB::table('ufs')->insert(['estado' => 'Piauí', 'uf' => 'PI']);
			DB::table('ufs')->insert(['estado' => 'Paraná', 'uf' => 'PR']);
			DB::table('ufs')->insert(['estado' => 'Rio de Janeiro', 'uf' => 'RJ']);
			DB::table('ufs')->insert(['estado' => 'Rio Grande do Norte', 'uf' => 'RN']);
			DB::table('ufs')->insert(['estado' => 'Rondônia', 'uf' => 'RO']);
			DB::table('ufs')->insert(['estado' => 'Roraima', 'uf' => 'RR']);
			DB::table('ufs')->insert(['estado' => 'Rio Grande do Sul', 'uf' => 'RS']);
			DB::table('ufs')->insert(['estado' => 'Santa Catarina', 'uf' => 'SC']);
			DB::table('ufs')->insert(['estado' => 'Sergipe', 'uf' => 'SE']);
			DB::table('ufs')->insert(['estado' => 'São Paulo', 'uf' => 'SP']);
			DB::table('ufs')->insert(['estado' => 'Tocantis', 'uf' => 'TO']);
    }
}
