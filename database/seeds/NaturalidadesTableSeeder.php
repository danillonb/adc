<?php

use Illuminate\Database\Seeder;

class NaturalidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('naturalidades')->insert(['naturalidade' => 'Acriano']);
		DB::table('naturalidades')->insert(['naturalidade' => 'Alagoano']);
		DB::table('naturalidades')->insert(['naturalidade' => 'Amapaense']);
		DB::table('naturalidades')->insert(['naturalidade' => 'Amazonense']);
		DB::table('naturalidades')->insert(['naturalidade' => 'Baiano']);
		DB::table('naturalidades')->insert(['naturalidade' => 'Cearense']);
		DB::table('naturalidades')->insert(['naturalidade' => 'Capixaba']);
		DB::table('naturalidades')->insert(['naturalidade' => 'Goiano']);
		DB::table('naturalidades')->insert(['naturalidade' => 'Maranhense']);
		DB::table('naturalidades')->insert(['naturalidade' => 'Mato-Grossense']);
		DB::table('naturalidades')->insert(['naturalidade' => 'Sul-Mato-Grossense']);
		DB::table('naturalidades')->insert(['naturalidade' => 'Mineiro']);
		DB::table('naturalidades')->insert(['naturalidade' => 'Outro']);
		DB::table('naturalidades')->insert(['naturalidade' => 'Paraense']);
		DB::table('naturalidades')->insert(['naturalidade' => 'Paraibano']);
		DB::table('naturalidades')->insert(['naturalidade' => 'Paranaense']);
		DB::table('naturalidades')->insert(['naturalidade' => 'Pernambucano']);
		DB::table('naturalidades')->insert(['naturalidade' => 'Piauiense']);
		DB::table('naturalidades')->insert(['naturalidade' => 'Fluminense']);
		DB::table('naturalidades')->insert(['naturalidade' => 'Potiguar']);
		DB::table('naturalidades')->insert(['naturalidade' => 'Rio-Grandense-do-Sul']);
		DB::table('naturalidades')->insert(['naturalidade' => 'Rondoniense']);
		DB::table('naturalidades')->insert(['naturalidade' => 'Roraimense']);
		DB::table('naturalidades')->insert(['naturalidade' => 'Catarinense']);
		DB::table('naturalidades')->insert(['naturalidade' => 'Paulista']);
		DB::table('naturalidades')->insert(['naturalidade' => 'Sergipano']);
		DB::table('naturalidades')->insert(['naturalidade' => 'Tocantinense']);
    }
}
