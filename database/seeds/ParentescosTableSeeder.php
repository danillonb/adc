<?php

use Illuminate\Database\Seeder;

class ParentescosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parentescos')->insert(['parentesco' => 'Filha']);
        DB::table('parentescos')->insert(['parentesco' => 'Filho']);
        DB::table('parentescos')->insert(['parentesco' => 'Esposa']);
        DB::table('parentescos')->insert(['parentesco' => 'Esposo']);
        DB::table('parentescos')->insert(['parentesco' => 'Pai']);
        DB::table('parentescos')->insert(['parentesco' => 'Mãe']);
        DB::table('parentescos')->insert(['parentesco' => 'Enteado']);
        DB::table('parentescos')->insert(['parentesco' => 'Enteada']);
        DB::table('parentescos')->insert(['parentesco' => 'Sogro']);
        DB::table('parentescos')->insert(['parentesco' => 'Sogra']);
        DB::table('parentescos')->insert(['parentesco' => 'Avô']);
        DB::table('parentescos')->insert(['parentesco' => 'Avó']);
        DB::table('parentescos')->insert(['parentesco' => 'Outro']);

    }
}
